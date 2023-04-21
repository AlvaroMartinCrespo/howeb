// Obtener el elemento tbody de la tabla
var tbody = document.getElementsByTagName("tbody")[0];

// Agregar un evento de clic a cada celda de fecha
var cells = tbody.getElementsByTagName("td");
for (var i = 0; i < cells.length; i++) {
    cells[i].addEventListener("click", function () {
        // Quitar la clase 'selected' de todas las celdas de fecha
        for (var j = 0; j < cells.length; j++) {
            cells[j].classList.remove("selected");
        }
        // Agregar la clase 'selected' a la celda de fecha seleccionada
        this.classList.add("selected");
    });
}

// Obtener los botones de navegación por mes
var prevMonthBtn = document.getElementById("prev-month-btn");
var nextMonthBtn = document.getElementById("next-month-btn");

// Agregar eventos de clic a los botones de navegación por mes
prevMonthBtn.addEventListener("click", function () {
    // TODO: Navegar al mes anterior
});
nextMonthBtn.addEventListener("click", function () {
    // TODO: Navegar al mes siguiente
});
