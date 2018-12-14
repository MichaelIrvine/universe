// -- Variables for menu navigation
  const pageUrl = window.location.href;
  const subMenu = $(".sub-menu");
  const subMenuButton = $(".menu-item-has-children a");
  const menuBar = $('.grey-bar');
  const navParent = $('.menu-item-has-children');


  // --- Check page URL -- Display Sub Menu if URL Matches
// --- Sub Menu stays visible on selected pages

  if (pageUrl.indexOf("lookbook") > -1 || pageUrl.indexOf("drops") > -1 || pageUrl.indexOf("product") > -1) {
    menuBar.addClass('grey-bar-height bar-color');
    subMenu.addClass("is-visible");
    navParent.css('background-color','#f7f7f7');
    subMenuButton.off('click');
  };