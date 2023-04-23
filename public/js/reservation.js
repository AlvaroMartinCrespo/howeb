window.addEventListener("DOMContentLoaded", () => {
    // Card data input

    const inputCardNumber = document.getElementById("inputCardNumber");
    const cardNumber = document.getElementById("cardNumber");

    inputCardNumber.addEventListener("input", () => {
        const input = inputCardNumber.value;

        const formattedInput = input.replaceAll(/[^0-9]/g, "");
        const formattedNumber = formattedInput.padEnd(16, "#");
        cardNumber.textContent = formattedNumber;
    });

    const inputName = document.getElementById("inputName");
    const cardName = document.getElementById("cardName");

    inputName.addEventListener("input", () => {
        const input = inputName.value;
        const formattedInput = input.toUpperCase();
        cardName.textContent = formattedInput ? formattedInput : "JOHN";
    });

    const inputLastName = document.getElementById("inputLastName");
    const cardLastName = document.getElementById("cardLastName");

    inputLastName.addEventListener("input", () => {
        const input = inputLastName.value;
        const formattedInput = input.toUpperCase();
        cardLastName.textContent = formattedInput ? formattedInput : "DOE";
    });

    const inputExpirationDate = document.getElementById("inputExpirationDate");
    const cardExpirationDate = document.getElementById("cardExpirationDate");

    inputExpirationDate.addEventListener("input", () => {
        const input = inputExpirationDate.value;
        const formattedInput = input.split("-");

        cardExpirationDate.textContent =
            formattedInput[1] + "/" + formattedInput[0];
    });

    const inputCVV = document.getElementById("inputCVV");
    const cardCVV = document.getElementById("cardCVV");

    inputCVV.addEventListener("input", () => {
        const input = inputCVV.value;
        cardCVV.textContent = input ? input : "...";
    });
});
