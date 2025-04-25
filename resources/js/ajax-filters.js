jQuery(document).ready(function ($) {
  const filterForm = $("#filter-form");

  console.log("AJAX filters ready");
  console.log(theme_vars.ajax_url);

  // Prevent Default
  filterForm.on("submit", function (e) {
    e.preventDefault();
  });

  // Trigger AJAX on any input change with debounce
  let debounceTimer;
  filterForm.on("change", "input", function () {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      // Get form data directly
      const formData = new FormData(filterForm[0]);
      // Add the action
      formData.append("action", "filter_products");

      formData.append(
        "current_category",
        $("#filter-form input[name='current_category']").val()
      );

      // Convert FormData to a plain object
      const data = {};
      formData.forEach((value, key) => {
        if (data[key]) {
          if (!Array.isArray(data[key])) {
            data[key] = [data[key]];
          }
          data[key].push(value);
        } else {
          data[key] = value;
        }
      });

      console.log("Form Data: ", data); // Debugging the data being sent

      $.ajax({
        url: theme_vars.ajax_url,
        type: "POST",
        data: data,
        beforeSend: function () {
          $(".products").fadeTo(200, 0.5);
        },
        success: function (response) {
          $(".products").html(response).fadeTo(200, 1);
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
          console.log(xhr.responseText); // Add this to see the full error
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
    filterForm
      .find("input[type=checkbox]")
      .prop("checked", false)
      .trigger("change");
    updateFilterButtonStates(); // <-- Add this
  });

  // Update filter button states
  function updateFilterButtonStates() {
    $("#filter-form input[type=checkbox]").each(function () {
      const label = $("label[for='" + $(this).attr("id") + "']");
      if ($(this).is(":checked")) {
        label
          .removeClass("hover:bg-blue bg-cream")
          .addClass("bg-blue text-white");
      } else {
        label
          .removeClass("bg-blue text-white")
          .addClass("bg-cream hover:bg-blue hover:text-white");
      }
    });
  }

  // Initial state check
  updateFilterButtonStates();

  // On change
  $("#filter-form").on("change", "input[type=checkbox]", function () {
    updateFilterButtonStates();
  });
});
