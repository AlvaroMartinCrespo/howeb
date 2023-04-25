window.addEventListener("DOMContentLoaded", () => {
    const loaderDiv = document.querySelector("#loader");

    setTimeout(() => {
        loaderDiv.classList.add("hidden");
        const button = document.createElement("button");
        button.textContent = "Ir a otra página";
        button.classList.add(
            "bg-blue-500",
            "text-white",
            "py-2",
            "px-4",
            "rounded",
            "mt-4",
            "hover:bg-blue-600"
        );
        button.addEventListener("click", () => {
            window.location.href = "https://otra-pagina.com";
        });
        const contentSection =
            '<div class="fixed top-0 left-0 z-50 w-screen h-screen flex items-center justify-center bg-gray-800 bg-opacity-75">  <div class="bg-white rounded-lg p-8"><h2 class="text-gray-900 font-bold mb-4">Pago realizado correctamente</h2> <p class="text-gray-700 mb-4">Vuela a su perfil:</p><a href="{{route("landing")}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar sesión</a> </div> </div>';
        document.getElementById("sectionBack").innerHTML = contentSection;
    }, 5000);
});
