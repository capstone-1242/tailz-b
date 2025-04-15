jQuery(document).ready(function ($) {
  const filterForm = $("#filter-form");

  // Test
  console.log("AJAX filters ready");
  console.log(theme_vars.ajax_url);

  // Prevent Default
  filterForm.on("change", function (e) {
    e.preventDefault();
  });

  // Trigger AJAX on any input change with debounce
  let debounceTimer;
  filterForm.on("change", "input", function () {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      const formData = filterForm.serialize();

      $.ajax({
        url: theme_vars.ajax_url,
        type: "POST",
        data: {
          action: "filter_products",
          ...Object.fromEntries(new URLSearchParams(formData)),
        },
        beforeSend: function () {
          $(".products").fadeTo(200, 0.5);
        },
        success: function (response) {
          $(".products").html(response).fadeTo(200, 1);
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
          $(".products")
            .html(
              '<p class="text-brown">Something went wrong. Please try again.</p>'
            )
            .fadeTo(200, 1);
        },
      });
    }, 300);
  });

  // Clear all
  $("#clear-all-shop").on("click", function (e) {
    e.preventDefault();
    filterForm.find("input[type=checkbox]").prop("checked", false);
    filterForm.trigger("change");
  });
});

jQuery(document).ready(function ($) {
  function updateFilterButtonStates() {
    $("#filter-form input[type=checkbox]").each(function () {
      const label = $("label[for='" + $(this).attr("id") + "']");
      if ($(this).is(":checked")) {
        label.removeClass("hover:bg-blue").addClass("bg-blue text-white");
      } else {
        label
          .removeClass("bg-blue text-white")
          .addClass("hover:bg-blue hover:text-white");
      }
    });
  }

  // Initial state check
  updateFilterButtonStates();

  // On change
  $("#filter-form").on("change", "input[type=checkbox]", function () {
    updateFilterButtonStates();
  });

  // Optional: clear all button resets appearance too
  $("#clear-all-shop").on("click", function () {
    updateFilterButtonStates();
  });
});
