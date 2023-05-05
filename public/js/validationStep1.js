const inputName = document.getElementById("nombre");
const inputLastName = document.getElementById("apellidos");
const inputEmail = document.getElementById("email");
const inputTel = document.getElementById("telefono");
const inputDni = document.getElementById("dni");
const inputCp = document.getElementById("cp");
const errorName = document.getElementById("errorNombre");
const errorLastName = document.getElementById("errorApellidos");
const errorEmail = document.getElementById("errorEmail");
const errorTel = document.getElementById("errorTelefono");
const errorDni = document.getElementById("errorDni");
const errorCp = document.getElementById("errorCp");

const form = document.getElementById("formUser");

function errorMessage() {}

form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (!validateName()) {
        errorMessage("Name invalid");
        alert("Ingrese un nombre válido");
        inputName.focus();
        return;
    }

    if (!validateLastName()) {
        alert("Ingrese apellidos válidos");
        inputLastName.focus();
        return;
    }

    if (!validateEmail()) {
        alert("Ingrese un email válido");
        inputEmail.focus();
        return;
    }

    if (!validateTelf()) {
        alert("Ingrese un número de teléfono válido");
        inputTel.focus();
        return;
    }

    if (!validateDNI()) {
        alert("Ingrese un DNI válido");
        inputDni.focus();
        return;
    }

    if (!validateCP()) {
        alert("Ingrese un código postal válido");
        inputCp.focus();
        return;
    }

    // Si se han validado todos los campos, se puede enviar el formulario
    form.submit();
});

function validateName() {
    const nombre = inputName.value.trim();

    // El nombre debe tener al menos dos caracteres y solo contener letras y espacios
    const regex = /^[a-zA-Z ]{2,}$/;
    return regex.test(nombre);
}

function validateLastName() {
    const apellidos = inputLastName.value.trim();

    // Los apellidos deben tener al menos dos caracteres y solo contener letras y espacios
    const regex = /^[a-zA-Z ]{2,}$/;
    return regex.test(apellidos);
}

function validateEmail() {
    const email = inputEmail.value.trim();

    // Utilizamos una expresión regular para validar el email
    const regex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    return regex.test(email);
}

function validateTelf() {
    const telefono = inputTel.value.trim();

    // Utilizamos una expresión regular para validar el número de teléfono
    const regex = /^\+?\d{9,15}$/;
    return regex.test(telefono);
}

function validateDNI() {
    const dni = inputDni.value.trim();

    // Utilizamos una expresión regular para validar el DNI
    const regex = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i;
    return regex.test(dni);
}

function validateCP() {
    // Expresión regular para validar códigos postales de 5 dígitos en Estados Unidos
    const regex = /^[0-9]{5}$/;
    return regex.test(inputCp);
}
