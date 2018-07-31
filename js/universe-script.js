jQuery(document).ready(function($) {
  /* --------------------
# Main Navigation Sub Menu
------------------------ */
  // -- Variables for menu navigation
  const subMenu = $(".sub-menu");
  const subMenuButton = $(".menu-item-has-children a");
  console.log(subMenuButton);

    subMenuButton.click(function () {
        // console.log('clkk');
        subMenu.toggleClass("is-visible");
    });

  // --- Check page URL -- Display Sub Menu if URL Matches
  // --- Sub Menu stays visible on selected pages
  const pageUrl = window.location.href;

  if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("collections") > -1) {
    subMenu.addClass("is-visible");
    subMenuButton.off('click');
  }

  /* --------------------
# Missing Links - Contact reveal
------------------------ */
const contactButton = $('.ml-link0');

contactButton.click(function(e){
    e.preventDefault();
    $('.wpcf7').slideToggle("slow");
});

    const ml = $('a[data-ml-item="ml-menu-item"]');

    console.log(ml);

});
