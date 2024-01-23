"use strict";

(async () => {
    const body = document.querySelector('body');
    const frontImage = await loadComponent('frontImage');
    const name = await loadComponent('name');

    body.insertAdjacentHTML('afterbegin', name);
    body.insertAdjacentHTML('afterbegin', frontImage);
})();