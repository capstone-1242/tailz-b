document.addEventListener("DOMContentLoaded", function () {
  // DOM elements
  const menuToggle = document.getElementById("primary-menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileMenuClose = document.getElementById("mobile-menu-close");
  const mobileMenuOverlay = document.getElementById("mobile-menu-overlay");
  const body = document.body;

  // Toggle mobile menu
  function toggleMenu() {
    if (!mobileMenu || !mobileMenuOverlay) return;

    // Check if menu is open by looking at the classList instead of the inline style
    const isOpen = !mobileMenu.classList.contains("menu-closed");

    if (!isOpen) {
      // Opening menu
      mobileMenu.style.transform = "translateX(0)";
      mobileMenu.classList.remove("menu-closed");
      mobileMenuOverlay.classList.remove("hidden");
      body.classList.add("overflow-hidden");
    } else {
      // Closing menu
      mobileMenu.style.transform = "translateX(-100%)";
      mobileMenu.classList.add("menu-closed");
      mobileMenuOverlay.classList.add("hidden");
      body.classList.remove("overflow-hidden");

      // Reset all submenus when closing the menu
      const submenus = document.querySelectorAll(".sub-menu");
      submenus.forEach((submenu) => {
        submenu.classList.add("hidden");
      });

      // Reset all toggle buttons
      const toggleButtons = document.querySelectorAll(".mobile-submenu-toggle");
      toggleButtons.forEach((button) => {
        button.setAttribute("aria-expanded", "false");
        button.style.backgroundColor = "";
        const icon = button.querySelector(".toggle-icon");
        if (icon) {
          icon.style.transform = "rotate(0deg)";
        }
      });
    }
  }

  // Only add event listeners if elements exist
  if (menuToggle) {
    menuToggle.addEventListener("click", toggleMenu);
  }

  if (mobileMenuClose) {
    mobileMenuClose.addEventListener("click", toggleMenu);
  }

  if (mobileMenuOverlay) {
    mobileMenuOverlay.addEventListener("click", toggleMenu);
  }

  // Handle submenu toggles
  const submenuToggles = document.querySelectorAll(".mobile-submenu-toggle");
  submenuToggles.forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      const targetId = this.getAttribute("data-target");
      if (!targetId) return;

      const submenu = document.getElementById(targetId);
      if (!submenu) return;

      const isExpanded = this.getAttribute("aria-expanded") === "true";

      // If it's the SERVICES or SHOP link and the submenu is already open, navigate to respective page
      if ((targetId === "services-submenu" || targetId === "shop-submenu") && isExpanded) {
        window.location.href = targetId === "services-submenu" ? "/services" : "/shop";
        return;
      }

      // Close all other submenus first
      submenuToggles.forEach((otherToggle) => {
        if (otherToggle !== toggle) {
          const otherTargetId = otherToggle.getAttribute("data-target");
          if (otherTargetId) {
            const otherSubmenu = document.getElementById(otherTargetId);
            if (otherSubmenu) {
              otherSubmenu.classList.add("hidden");
            }
          }
          otherToggle.setAttribute("aria-expanded", "false");
          otherToggle.style.backgroundColor = "";
          const otherIcon = otherToggle.querySelector(".toggle-icon");
          if (otherIcon) {
            otherIcon.style.transform = "rotate(0deg)";
          }
        }
      });

      if (!isExpanded) {
        // Opening submenu
        submenu.classList.remove("hidden");
        this.setAttribute("aria-expanded", "true");
        const icon = this.querySelector(".toggle-icon");
        if (icon) {
          icon.style.transform = "rotate(90deg)";
        }
      } else {
        // Closing submenu
        submenu.classList.add("hidden");
        this.setAttribute("aria-expanded", "false");
        const icon = this.querySelector(".toggle-icon");
        if (icon) {
          icon.style.transform = "rotate(0deg)";
        }
      }
    });
  });

  // Add this class initially
  if (mobileMenu) {
    mobileMenu.classList.add("menu-closed");
  }
});
