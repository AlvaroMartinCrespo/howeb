window.addEventListener("DOMContentLoaded", () => {
    //Library for typing effect and animation
    let typed = new Typed("#letters", {
        strings: [
            "Empieza tu <span class='text-orange-400'>sueño</span>",
            "Empieza tu <br> <span class='text-orange-600'>Realidad.</span>",
        ],
        typeSpeed: 220,
        backSpeed: 70,
        cursorChar: "",
        backDelay: 700,
        startDelay: 200,
    });
});
