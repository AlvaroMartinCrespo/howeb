window.addEventListener("DOMContentLoaded", () => {
    //Library for typing effect and animation
    let typed = new Typed("#letters", {
        strings: [
            "Comienza tu <span class='text-orange-400'>sueño</span>",
            "Comienza tu <br> <span class='text-orange-600 bg-gray-400/40'>Realidad.</span>",
        ],
        typeSpeed: 120,
        backSpeed: 50,
        cursorChar: "",
        backDelay: 700,
    });
});
