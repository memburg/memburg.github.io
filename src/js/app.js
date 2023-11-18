"use strict";

(async () => {
    // Get body to attach the components
    const body = document.querySelector('body');

    // Load the components
    const header = await loadComponent('header');

    // Attach the components
    body.insertAdjacentHTML('beforeend', header);
})();