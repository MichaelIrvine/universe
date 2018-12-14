jQuery(document).ready(function($) {
  
  // --- Check page URL -- Display Sub Menu if URL Matches
  // --- Sub Menu stays visible on selected pages
  const pageUrl = window.location.href;
  const header  = $('.site-header, .grey-bar, .site-footer');

  if (pageUrl.indexOf("coming-soon") > -1 ) {
    header.css('display','none');    
  };

});

