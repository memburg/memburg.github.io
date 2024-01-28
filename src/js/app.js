"use strict";

(async () => {
    const body = document.querySelector("body");

    // get components
    const frontImage = await loadComponent("frontImage");
    const name = await loadComponent("name");
    const love = await loadComponent("love");
    const contact = await loadComponent("contact");
    const work = await loadComponent("work");
    const bio = await loadComponent("bio");

    // append
    body.insertAdjacentHTML("beforeend", frontImage);
    body.insertAdjacentHTML("beforeend", name);
    body.insertAdjacentHTML("beforeend", work);
    body.insertAdjacentHTML("beforeend", bio);
    body.insertAdjacentHTML("beforeend", love);
    body.insertAdjacentHTML("beforeend", contact);

    // get footer component
    const footer = await loadComponent("footer");

    body.insertAdjacentHTML("beforeend", footer)
})();