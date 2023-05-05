window.addEventListener("DOMContentLoaded", () => {
    // Input data of the form
    const form = document.getElementById("formUser");
    const inputName = document.getElementById("nombre");
    const inputLastName = document.getElementById("apellidos");
    const inputEmail = document.getElementById("email");
    const inputTel = document.getElementById("telefono");
    const inputDni = document.getElementById("dni");
    const inputCp = document.getElementById("cp");
    console.log(inputCp);

    // Listener on form submit
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        // Validation

        if (!validateName()) {
            errorMessage("Name invalid", "Name");
            inputName.focus();
            return;
        } else {
            errorMessage("", "Name");
        }

        if (!validateLastName()) {
            errorMessage("Last Name invalid", "LastName");
            inputLastName.focus();
            return;
        } else {
            errorMessage("", "LastName");
        }

        if (!validateEmail()) {
            errorMessage("Email invalid", "Email");
            inputEmail.focus();
            return;
        } else {
            errorMessage("", "Email");
        }

        if (!validateTelf()) {
            errorMessage("Phone invalid", "Tel");
            inputTel.focus();
            return;
        } else {
            errorMessage("", "Tel");
        }

        if (!validateDNI()) {
            errorMessage("DNI invalid", "Dni");
            inputDni.focus();
            return;
        } else {
            errorMessage("", "Dni");
        }

        if (!validateCP()) {
            errorMessage("CP invalid", "Cp");
            inputCp.focus();
            return;
        } else {
            errorMessage("", "Cp");
        }

        // If everything is ok, submit
        form.submit();
    });

    function errorMessage(error, input) {
        document.querySelector(`#error${input}`).textContent = error;
    }

    /**
     * Validate name
     * @returns {boolean}
     */
    function validateName() {
        const name = inputName.value.trim();

        // Name must have at least 3 characters
        const regex = /^[a-zA-Z ]{3,}$/;
        return regex.test(name);
    }

    /**
     * Validate last name
     * @returns {boolean}
     */
    function validateLastName() {
        const lastName = inputLastName.value.trim();

        // Last name must have at least 4 characters
        const regex = /^[a-zA-Z ]{4,}$/;
        return regex.test(lastName);
    }

    /**
     * Validate email
     * @returns {boolean}
     */
    function validateEmail() {
        const email = inputEmail.value.trim();

        // Use regex to validate email
        const regex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
        return regex.test(email);
    }

    /**
     * Validate phone
     * @returns {boolean}
     */
    function validateTelf() {
        const phone = inputTel.value.trim();

        // Use regex to validate phone
        const regex = /^\+?\d{9,15}$/;
        return regex.test(phone);
    }

    /**
     * Validate DNI
     * @returns {boolean}
     */
    function validateDNI() {
        const dni = inputDni.value.trim();

        // Use regex to validate DNI
        const regex = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i;
        return regex.test(dni);
    }

    /**
     * Validate CP
     * @returns {boolean}
     */
    function validateCP() {
        // Use regex to validate CP
        const regex = /^[0-9]{5}$/;
        return regex.test(inputCp.value);
    }
});
