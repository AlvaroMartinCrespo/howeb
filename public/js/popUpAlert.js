// Alert message that pops up when the user information is successfully updated.
const alertMessage = document.getElementById("alertMessage");
window.addEventListener("DOMContentLoaded", () => {
    const alert = document.getElementById("alertMessage");
    if (alert) {
        alertMessage.classList.remove("hidden");
        setTimeout(() => {
            alertMessage.classList.add("hidden");
        }, 5000);
    }
});
