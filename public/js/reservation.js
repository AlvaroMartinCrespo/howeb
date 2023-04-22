window.addEventListener("DOMContentLoaded", () => {
    // Card number input
    const inputCardNumber = document.getElementById("inputCardNumber");
    const cardNumber = document.getElementById("cardNumber");

    console.log(inputCardNumber);

    inputCardNumber.addEventListener("input", function () {
        const input = this.value;

        console.log(input);

        const formattedInput = input.replaceAll(/[^0-9]/g, "");
        const formattedNumber = formattedInput.padEnd(16, "#");
        cardNumber.textContent = formattedNumber;
    });

    const inputName = document.getElementById("inputName");
    const cardName = document.getElementById("cardName");

    inputName.addEventListener("input", function () {
        const input = this.value;
        const formattedInput = input.toUpperCase();
        cardName.textContent = formattedInput || "JOHN DOE";
    });
});
