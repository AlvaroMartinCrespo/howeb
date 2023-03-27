// Evento nav
window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
        document.getElementById("nav-landing").classList.add("opacity-40");
        document.getElementById("nav-landing").classList.remove("p-3");
    }

    if (window.scrollY === 0) {
        document.getElementById("nav-landing").classList.remove("opacity-40");
        document.getElementById("nav-landing").classList.add("p-3");
    }
});
