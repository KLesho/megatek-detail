// scripts.js

$(document).ready(function () {
    $('.tab-button').click(function () {
        // Get the data-tab attribute to determine which tab was clicked
        var tab = $(this).data('tab');

        // Make an AJAX request to the corresponding route
        $.get('/' + tab, function (data) {
            // Replace the content of the tab with the response data
            $('.tab-content').addClass('hidden'); // Hide all tab contents
            $('#' + tab).removeClass('hidden').html(data); // Show and populate the selected tab content
        });
    });

    // Initialize by clicking the first tab
    $('.tab-button[data-tab="tab1"]').click();
});


