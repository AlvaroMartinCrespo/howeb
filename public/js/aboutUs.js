window.addEventListener("DOMContentLoaded", () => {
    //Library for typing effect and animation

    let typed = new Typed("#letters1", {
        strings: ["No te pongas"],
        typeSpeed: 150,
        backSpeed: 50,
        cursorChar: "",
        backDelay: 700,
    });

    setTimeout(() => {
        let typed2 = new Typed("#limitedLetters", {
            strings: ["Limites"],
            typeSpeed: 120,
            backSpeed: 50,
            cursorChar: "",
            backDelay: 700,
        });
    }, 3000);

    // Modal
    const myButton = document.getElementById("myButton");
    const myModal = document.getElementById("myModal");
    const closeButton = document.getElementById("closeButton");

    myButton.addEventListener("click", function () {
        myModal.classList.remove("hidden");
    });

    closeButton.addEventListener("click", function () {
        myModal.classList.add("hidden");
    });
});
