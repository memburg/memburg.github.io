"use strict";

(async () => {
    // Get body to attach the components
    const body = document.querySelector('body');

    // Load the components
    const navbar = await loadComponent('navbar');
    const header = await loadComponent('header');

    // Attach the components
    body.insertAdjacentHTML('afterbegin', header);
    body.insertAdjacentHTML('afterbegin', navbar);

    // Get main tag to be able to attach components to it
    const main = document.querySelector('main');

    // Load the components
    const shortbio = await loadComponent('shortbio');

    // Attach components to the main tag
    main.insertAdjacentHTML('beforeend', shortbio);
})();