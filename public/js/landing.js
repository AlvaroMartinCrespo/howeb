/**
 * Animation to accomodation in the landing page
 */
window.addEventListener("DOMContentLoaded", () => {
    document.getElementById("button").classList.add("translate-y-[9rem]");
    let accomodations = document.querySelectorAll(".accomodation");

    let typed = new Typed("#lettersLanding", {
        strings: ["Diversión"],
        typeSpeed: 70,
        backSpeed: 70,
        cursorChar: "",
        backDelay: 700,
        startDelay: 200,
    });

    accomodations.forEach((accomodation) => {
        let description = accomodation.querySelector(
            ".accomodationDescription"
        );

        accomodation.addEventListener("mouseover", () => {
            if (description) {
                description.classList.remove("h-0");
                description.classList.remove("opacity-0");
            }
        });

        accomodation.addEventListener("mouseout", () => {
            if (description) {
                description.classList.add("h-0");
                description.classList.add("opacity-0");
            }
        });
    });
});

// Particles
particlesJS("particles-js", {
    particles: {
        number: { value: 90, density: { enable: true, value_area: 500 } },
        color: { value: "#000" },
        shape: {
            type: "circle",
            stroke: { width: 0, color: "#000000" },
            polygon: { nb_sides: 5 },
            image: { src: "img/github.svg", width: 100, height: 100 },
        },
        opacity: {
            value: 0.3,
            random: false,
            anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
        },
        size: {
            value: 3,
            random: true,
            anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
        },
        line_linked: {
            enable: true,
            distance: 70,
            color: "#3FC7D7",
            opacity: 0.4,
            width: 2,
        },
        move: {
            enable: true,
            speed: 6,
            direction: "none",
            random: false,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: { enable: false, rotateX: 600, rotateY: 1200 },
        },
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: { enable: true, mode: "repulse" },
            resize: true,
        },
        modes: {
            grab: { distance: 400, line_linked: { opacity: 1 } },
            bubble: {
                distance: 400,
                size: 40,
                duration: 2,
                opacity: 8,
                speed: 3,
            },
            repulse: { distance: 200, duration: 0.4 },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
        },
    },
    retina_detect: true,
});
