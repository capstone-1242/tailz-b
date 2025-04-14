document.addEventListener("DOMContentLoaded", function () {
  const petFilters = document.querySelectorAll('input[name="pet"]');
  const serviceFilters = document.querySelectorAll('input[name="service[]"]');
  const clearBtn = document.getElementById("clear-all");
  const filterBtn = document.getElementById("gallery-filter-btn");
  const filterMenu = document.getElementById("filter-menu");
  const closeBtn = document.getElementById("filter-close-btn");

  const colorMap = {
    grooming: "bg-red",
    daycare: "bg-orange",
    hotel: "bg-yellow",
    training: "bg-lime",
    exercise: "bg-sky",
    portraits: "bg-purple",
    "puppy-programs": "bg-pink",
  };

  // Pet Buttons
  function setupPetFilterRadios() {
    const labels = document.querySelectorAll(
      'label[for="dog"], label[for="cat"]'
    );

    petFilters.forEach((radio) => {
      radio.addEventListener("change", function () {
        labels.forEach((label) => {
          label.classList.remove("bg-blue", "text-white");
          label.classList.add("bg-cream");
        });

        const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
        if (selectedLabel) {
          selectedLabel.classList.remove("bg-cream");
          selectedLabel.classList.add("bg-blue", "text-white");
        }
      });
    });
  }

  // Service Buttons
  function setupServiceFilterCheckboxes() {
    serviceFilters.forEach((checkbox) => {
      const label = document.querySelector(`label[for="${checkbox.id}"]`);
      const colorClass = colorMap[checkbox.id];

      checkbox.addEventListener("change", () => {
        if (label && colorClass) {
          checkbox.checked
            ? label.classList.add(colorClass)
            : label.classList.remove(colorClass);
        }
      });
    });
  }

  // Mobile filter open/close toggle
  function setupMobileFilterToggle() {
    if (filterBtn && filterMenu) {
      filterBtn.addEventListener("click", () => {
        filterMenu.classList.toggle("hidden");
      });
    }

    if (closeBtn && filterMenu) {
      closeBtn.addEventListener("click", () => {
        filterMenu.classList.add("hidden");
      });
    }
  }

  // Gallery
  function filterGallery() {
    const selectedPet =
      document.querySelector('input[name="pet"]:checked')?.id || null;

    const serviceInputs = document.querySelectorAll('input[name="service[]"]');
    const selectedServices = Array.from(serviceInputs)
      .filter((input) => input.checked)
      .map((input) => input.value);

    const galleryImages = document.querySelectorAll(".gallery-image");

    galleryImages.forEach((item) => {
      const itemPet = item.dataset.pet;
      const itemServices = item.dataset.service.split(" ");

      const petMatch = !selectedPet || itemPet === selectedPet;

      const serviceMatch =
        selectedServices.length === 0 ||
        selectedServices.some((service) => itemServices.includes(service));

      if (petMatch && serviceMatch) {
        item.classList.remove("hidden");
      } else {
        item.classList.add("hidden");
      }
    });
  }

  //Filter Functionality
  function setupGalleryFiltering() {
    const petInputs = document.querySelectorAll('input[name="pet"]');
    const serviceInputs = document.querySelectorAll('input[name="service[]"]');
    [...petInputs, ...serviceInputs].forEach((input) => {
      input.addEventListener("change", filterGallery);
    });
  }

  // Clear all Button
  function setupClearAllButton() {
    if (!clearBtn) return;

    clearBtn.addEventListener("click", () => {
      // Uncheck radios and checkboxes
      petFilters.forEach((filter) => (filter.checked = false));
      serviceFilters.forEach((filter) => (filter.checked = false));

      // Reset radio label styles
      const radioLabels = document.querySelectorAll(
        'label[for="dog"], label[for="cat"]'
      );
      radioLabels.forEach((label) => {
        label.classList.remove("bg-blue", "text-white");
        label.classList.add("bg-cream");
      });

      // Reset checkbox label styles
      Object.keys(colorMap).forEach((key) => {
        const label = document.querySelector(`label[for="${key}"]`);
        if (label) {
          label.classList.remove(colorMap[key]);
          label.classList.add("bg-cream");
        }
      });
      filterGallery();
    });
  }

  setupPetFilterRadios();
  setupServiceFilterCheckboxes();
  setupClearAllButton();
  setupMobileFilterToggle();
  setupGalleryFiltering();
});
