jQuery(document).ready(function($) {

// ****
// **** REMOVE THIS ONE STORE IS ACTIVE 

const collectionLink = $('.collection-link');

collectionLink.click(function(e){
  e.preventDefault();
});


// **** 
// **** REMOVE THIS ONE STORE IS ACTIVE ^^^
// ****



/* ----------------------------------------------------------------------------------------------------
---------------------------------------- # Main Navigation Sub Menu -----------------------------------
------------------------------------------------------------------------------------------------------- */

// -- Variables for menu navigation

  const subMenu = $(".sub-menu");
  const subMenuButton = $(".menu-item-has-children a");

  subMenuButton.click(function (e) {
        e.stopPropagation();
        subMenu.toggleClass("is-visible");
  });

  function closeNavMenu() {
    if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("collections") > -1 || pageUrl.indexOf("product") > -1) {
      return;
    } else {
      subMenu.removeClass('is-visible');
    }
  }

  $(document.body).click(function(e){
    closeNavMenu();
  });


// --- Check page URL -- Display Sub Menu if URL Matches
// --- Sub Menu stays visible on selected pages


  const pageUrl = window.location.href;
  const menuBar = $('.grey-bar');
  const navParent = $('.menu-item-has-children');

  if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("collections") > -1 || pageUrl.indexOf("product") > -1) {
    menuBar.addClass('bar-color');
    subMenu.addClass("is-visible");
    navParent.css('background-color','#f7f7f7');
    subMenuButton.off('click');
  };



/* ----------------------------------------------------------------------------------------------------
-------------------- # Missing Links - Contact reveal -------------------------------------------------
------------------------------------------------------------------------------------------------------- */


const missingLink = $('h3.ml-toggle');
const mlLinks     = $('a.ml-link');
const contactBtn  = $('a.ml-link').first();
const contactForm = $('#wpcf7-f107-o1');


missingLink.click(function(e){
  e.stopPropagation();
  console.log('toastyyy');
  mlLinks.addClass('active');
  mlLinks.slideToggle('slow');
});


contactBtn.click(function(e){
    e.preventDefault();
    e.stopPropagation();
    mlLinks.toggleClass('text-color');
    contactForm.slideToggle('slow');

});


function closeMissingLinks(e) {
    mlLinks.slideUp('slow');
    mlLinks.removeClass('active');
    contactForm.slideUp('slow');
    mlLinks.removeClass('text-color');
}

$(document.body).click(function(e){
  closeMissingLinks();
});

contactForm.click(function(e) {
    e.stopPropagation();
});



// End JQuery
// ------------------------------------------------------
});
// ------------------------------------------------------



