// Plain JS
// ------------------------------------------------------
// ------------------------------------------------------


// Removes the grey bar for mobile screens
const greyBar = document.querySelector('.grey-bar');
const shopBackground = document.querySelector('.menu-item-has-children');

console.log(shopBackground, 'yo');

function mediaSize() {
    /* Set the matchMedia */
    if (window.matchMedia('(max-width: 601px)').matches) {
        greyBar.classList.remove("bar-color");
        shopBackground.classList.remove("active-background");
    }
};

mediaSize();