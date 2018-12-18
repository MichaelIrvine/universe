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
  const pageUrl = window.location.href;
  const subMenu = $(".sub-menu");
  const subMenuButton = $(".menu-item-has-children a");
  const menuBar = $('.grey-bar');
  const navParent = $('.menu-item-has-children');


  // --- Check page URL -- Display Sub Menu if URL Matches
// --- Sub Menu stays visible on selected pages

  if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("drops") > -1 || pageUrl.indexOf("product") > -1) {
    menuBar.addClass('bar-color');
    subMenu.addClass("is-visible");
    subMenuButton.off('click');
  };

  subMenuButton.click(function (e) {
        e.stopPropagation();
        menuBar.addClass('grey-bar-height');
        setTimeout(
        function(){
            subMenu.addClass("is-visible");
        }, 500);
        
  });

  function closeNavMenu() {
    if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("drops") > -1 || pageUrl.indexOf("product") > -1) {
      return;
    } else {
      subMenu.removeClass('is-visible');
      setTimeout(
        function(){
          menuBar.removeClass('grey-bar-height');
        }, 300);
      
    }
  }

  $(document.body).on('click touch', function(e){
    closeNavMenu();
  });




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

$(document.body).on('click touch', function(e){
  closeMissingLinks();
});

contactForm.click(function(e) {
    e.stopPropagation();
});



/* ----------------------------------------------------------------------------------------------------
-------------------- # Drops - Sold Out slide down -------------------------------------------------
------------------------------------------------------------------------------------------------------- */

const dropBtn = $('.collection-link');

dropBtn.click(function(){
  $(this).next().slideDown('slow');
})


/* ----------------------------------------------------------------------------------------------------
-------------------- # Missing Links Menu Hide -------------------------------------------------
------------------------------------------------------------------------------------------------------- */

function hideMissingLink() {
  if (pageUrl.indexOf("missing-links") > -1 ) {
      missingLink.css('display', 'none');
  }
}

hideMissingLink();


// End JQuery
// ------------------------------------------------------
});
// ------------------------------------------------------



