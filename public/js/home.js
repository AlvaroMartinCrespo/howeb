const alertMessage = document.getElementById("alertMessage");

window.addEventListener("DOMContentLoaded", () => {
    const alert = document.getElementById("alertMessage");
    if (alert) {
        alertMessage.classList.remove("hidden");
        setTimeout(() => {
            alertMessage.classList.add("hidden");
        }, 5000); // ocultar después de 5 segundos
    }
});
