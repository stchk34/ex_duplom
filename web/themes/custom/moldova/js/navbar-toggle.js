// Burger animation.
$(document).ready(function () {
  $('.navbar-toggle').on('click', function () {
    $('.animated-icon').toggleClass('open');
  });
});
// Opening header for tablet and mobile extension.
$(document).ready(function () {
  $('.navbar-toggle').click(function () {
    $('.moldova-wrapper-header-top, .region-header-bottom').toggleClass('show');
  });
});
// Opening dropdown menu.
$(document).ready(function () {
  $('.dropdown_action').click(function () {
    $('.dropdown').toggleClass('show');
  });
});
// Opening search field.
$(document).ready(function () {
  $('.search_action').click(function () {
    $('.block-views-exposed-filter-blocksearch-results-page-1')
      .toggleClass('show');
  });
});
