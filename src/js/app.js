"use strict";

(async () => {
    const body = document.querySelector('body');
    const name = await loadComponent('name');

    body.insertAdjacentHTML('afterbegin', name);
})();