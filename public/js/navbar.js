// Listener scroll
window.addEventListener("scroll", () => {
    // Effect nav-bar

    if (window.scrollY > 0) {
        document.getElementById("nav-landing").classList.add("opacity-40");
        document.getElementById("nav-landing").classList.remove("p-3");
    }

    if (window.scrollY === 0) {
        document.getElementById("nav-landing").classList.remove("opacity-40");
        document.getElementById("nav-landing").classList.add("p-3");
    }
});

//Dropdown menu navbar
document.addEventListener("DOMContentLoaded", () => {
    const dropdown = document.getElementById("dropdown");
    const menu = document.getElementById("menu");

    dropdown.addEventListener("click", (e) => {
        e.stopPropagation();
        menu.classList.toggle("hidden");
    });

    menu.addEventListener("click", (e) => {
        e.stopPropagation();
    });

    document.addEventListener("click", () => {
        menu.classList.add("hidden");
    });
});
