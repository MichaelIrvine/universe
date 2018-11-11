

jQuery(function ($) {
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        $(".scrollup").addClass('fade-arrow-in');
      } else {
        $(".scrollup").removeClass('fade-arrow-in');
      }
    });

    $(".scrollup").click(function () {
      $("html, body").animate(
        {
          scrollTop: 0
        },
        600
      );
      return false;
    });
  });
});
