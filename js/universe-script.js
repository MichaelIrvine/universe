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
  const menuBar = $('.grey-bar');
  const navParent = $('.menu-item-has-children');

  console.log(navParent);

  if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("collections") > -1 || pageUrl.indexOf("product") > -1) {
    menuBar.addClass('bar-color');
    subMenu.addClass("is-visible");
    navParent.css('background-color','#f7f7f7');
    subMenuButton.off('click');
  };



/* --------------------
# Missing Links - Contact reveal
------------------------ */
const missingLink = $('h3.ml-toggle');
const mlLinks     = $('a.ml-link');
const contactBtn  = $('a.ml-link').first();
  const contactForm = $('#wpcf7-f107-o1');
console.log(contactBtn);

missingLink.click(function(e){
  e.preventDefault();
  console.log('toastyyy');
  mlLinks.toggleClass('active');
  mlLinks.slideToggle('slow');
});

contactBtn.click(function(e){
    e.preventDefault();
    mlLinks.toggleClass('active');
    mlLinks.toggleClass('text-color');
    contactForm.slideToggle('slow');
    
});

});
