window.addEventListener("DOMContentLoaded", () => {
    function mostrarLoader() {
        document.getElementById("loader").classList.add("rotate");
        setTimeout(function () {
            document.getElementById("loader").classList.remove("rotate");
        }, 2000);
    }
});
