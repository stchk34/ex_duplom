// Nav prioriity.
(function ($, Drupal) {
  Drupal.behaviors.menuLibrary = {
    attach: function (context, settings) {
      $(document).once('ready-menu', context).each(function () {
        if ($('body').width() > 767) {
          let priorityNavInstance = priorityNav.init({
            initClass: 'navpriority-navigation',
            mainNavWrapper: '.js-priority-nav',
            mainNav: '.navbar-nav',
            navDropdownLabel: Drupal.t('More'),
            breakpoint: 768,
            offsetPixels: 0
          });
        }
      });
    }
  };
})(jQuery, Drupal);


// Opening sidebar.
$(document).ready(function () {
  $('.dropdown_action').click(function () {
    $('.dropdown-menu').toggleClass('show');
  });
});

// Function to open the filter.
function openNav() {
  document.getElementById("search_api_filter_block").style.display = "block";
}

// Function to close the filter.
function closeNav() {
  document.getElementById("search_api_filter_block").style.display = "none";
}
