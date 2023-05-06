window.addEventListener("DOMContentLoaded", () => {
    // Input data of the form
    const form = document.getElementById("formCard");
    const inputName = document.getElementById("inputName");
    const inputLastName = document.getElementById("inputLastName");
    const inputCvv = document.getElementById("inputCVV");
    const inputCardNumber = document.getElementById("inputCardNumber");
    const inputDate = document.getElementById("inputExpirationDate");

    // Listener on form submit
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        // Validation

        if (!validateName()) {
            errorMessage("Name invalid", "NameCard");
            inputName.focus();
            return;
        } else {
            errorMessage("", "NameCard");
        }

        if (!validateLastName()) {
            errorMessage("Last Name invalid", "LastNameCard");
            inputLastName.focus();
            return;
        } else {
            errorMessage("", "LastNameCard");
        }

        if (!validateCvv()) {
            errorMessage("CVV invalid", "Cvv");
            inputCvv.focus();
            return;
        } else {
            errorMessage("", "Cvv");
        }

        if (!validateCardNumber()) {
            errorMessage("Card number invalid", "CardNumber");
            inputCardNumber.focus();
            return;
        } else {
            errorMessage("", "CardNumber");
        }

        if (!validateDate()) {
            errorMessage("Date invalid", "Date");
            inputDate.focus();
            return;
        } else {
            errorMessage("", "Date");
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
     * Validate date
     * @returns {boolean}
     */
    function validateDate() {
        const date = inputDate.value;
        if (date === "") {
            return false;
        }
        return true;
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
     * Validate Cvv
     * @returns {boolean}
     */
    function validateCvv() {
        // Use regex to validate Cvv
        const regex = /^[0-9]{3}$/;
        return regex.test(inputCvv.value);
    }

    /**
     * Validate Card Number
     * @returns {boolean}
     */
    function validateCardNumber() {
        // Use regex to validate card number
        const regex = /^[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}$/;
        return regex.test(inputCardNumber.value);
    }
});
