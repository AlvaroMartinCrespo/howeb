//Dropdown menu
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
