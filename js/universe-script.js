jQuery(document).ready(function($) {
  /* --------------------
# Main Navigation Sub Menu
------------------------ */
  // -- Variables for menu navigation
  const subMenu = $(".sub-menu");
  const subMenuButton = $(".menu-item-has-children a");

    subMenuButton.click(function () {
        subMenu.toggleClass("is-visible");
      setTimeout(function () {
        subMenu.removeClass("is-visible");
      }, 5000);
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
const mlLinks     = $('a.ml-link');
const contactBtn  = $('a.ml-link:nth-child(2)');
const contactForm = $('.wpcf7');

contactBtn.click(function(e){
    e.preventDefault();
    mlLinks.toggleClass('text-color');
    contactForm.slideToggle('slow');
    
});


});
