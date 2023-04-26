window.addEventListener("DOMContentLoaded", () => {
    const loaderDiv = document.getElementById("loader");
    const divBack = document.getElementById("back");

    // When loader is finished, remove hidden class of the div and show the divBack
    setTimeout(() => {
        loaderDiv.classList.add("hidden");
        divBack.classList.remove("hidden");
    }, 5000);
});
