// Plain JS
// ------------------------------------------------------
// ------------------------------------------------------


// Removes the grey bar for mobile screens
const greyBar = document.querySelector('.grey-bar');


function mediaSize() {
    /* Set the matchMedia */
    if (window.matchMedia('(max-width: 601px)').matches) {
        greyBar.classList.remove("bar-color");
    }
    console.log('woks');
};

mediaSize();