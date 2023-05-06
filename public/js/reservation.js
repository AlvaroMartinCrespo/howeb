window.addEventListener("DOMContentLoaded", () => {
    // Card data input
    if (document.getElementById("inputCardNumber")) {
        const inputCardNumber = document.getElementById("inputCardNumber");
        const cardNumber = document.getElementById("cardNumber");
        const inputName = document.getElementById("inputName");
        const cardName = document.getElementById("cardName");
        const inputLastName = document.getElementById("inputLastName");
        const cardLastName = document.getElementById("cardLastName");
        const inputExpirationDate = document.getElementById(
            "inputExpirationDate"
        );
        const inputCVV = document.getElementById("inputCVV");
        const cardCVV = document.getElementById("cardCVV");
        const cardExpirationDate =
            document.getElementById("cardExpirationDate");

        // Listeners

        // Card number
        inputCardNumber.addEventListener("input", () => {
            const input = inputCardNumber.value;

            const formattedInput = input.replaceAll(/[^0-9]/g, "");
            const formattedNumber = formattedInput.padEnd(16, "#");
            const inputValue = input.replaceAll(/[^0-9]/g, "");

            // Insert a space after every fourth character
            const formattedNumberWithSpaces = formattedNumber.replace(
                /(.{4})/g,
                "$1 "
            );

            const inputValueWithSpaces = inputValue.replace(
                /(.{4})(?!$)/g,
                "$1 "
            );

            cardNumber.textContent = formattedNumberWithSpaces;
            inputCardNumber.value = inputValueWithSpaces;
        });
        // Input name
        inputName.addEventListener("input", () => {
            const input = inputName.value;
            const formattedInput = input.toUpperCase();
            cardName.textContent = formattedInput ? formattedInput : "JOHN";
        });

        // Input last name
        inputLastName.addEventListener("input", () => {
            const input = inputLastName.value;
            const formattedInput = input.toUpperCase();
            cardLastName.textContent = formattedInput ? formattedInput : "DOE";
        });

        // Input expiration date
        inputExpirationDate.addEventListener("input", () => {
            const input = inputExpirationDate.value;
            const formattedInput = input.split("-");

            cardExpirationDate.textContent =
                formattedInput[1] + "/" + formattedInput[0];
        });

        // Input CVV
        inputCVV.addEventListener("input", () => {
            const input = inputCVV.value;
            cardCVV.textContent = input ? input : "...";
        });
    }
});
