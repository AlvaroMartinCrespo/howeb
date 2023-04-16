// Listener scroll
window.addEventListener("scroll", () => {
    // Effect clients
    //Client 1
    const client1 = document.querySelector("#client1");
    const rectClient1 = client1.getBoundingClientRect();
    if (
        rectClient1.top >= 0 &&
        rectClient1.left >= 0 &&
        rectClient1.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rectClient1.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    ) {
        client1.classList.remove("opacity-0");
        client1.classList.add("ml-[1rem]");
    } else {
        client1.classList.add("opacity-0");
        client1.classList.remove("ml-[1rem]");
    }
    //Client 2
    const client2 = document.querySelector("#client2");
    const rectClient2 = client2.getBoundingClientRect();
    if (
        rectClient2.top >= 0 &&
        rectClient2.left >= 0 &&
        rectClient2.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rectClient2.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    ) {
        client2.classList.remove("opacity-0");
        client2.classList.add("ml-[1rem]");
    } else {
        client2.classList.add("opacity-0");
        client2.classList.remove("ml-[1rem]");
    }
    //Client 3
    const client3 = document.querySelector("#client3");
    const rectClient3 = client3.getBoundingClientRect();
    if (
        rectClient3.top >= 0 &&
        rectClient3.left >= 0 &&
        rectClient3.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rectClient3.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    ) {
        client3.classList.remove("opacity-0");
        client3.classList.add("ml-[1rem]");
    } else {
        client3.classList.add("opacity-0");
        client3.classList.remove("ml-[1rem]");
    }
    //Client 4
    const client4 = document.querySelector("#client4");
    const rectClient4 = client4.getBoundingClientRect();
    if (
        rectClient4.top >= 0 &&
        rectClient4.left >= 0 &&
        rectClient4.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rectClient4.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    ) {
        client4.classList.remove("opacity-0");
        client4.classList.add("ml-[1rem]");
    } else {
        client4.classList.add("opacity-0");
        client4.classList.remove("ml-[1rem]");
    }
});

/**
 * Animation to accomodation in the landing page
 */
window.addEventListener("DOMContentLoaded", () => {
    let accomodations = document.querySelectorAll(".accomodation");

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
        number: { value: 90, density: { enable: true, value_area: 600 } },
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
// update = function () {
//     stats.begin();
//     stats.end();
//     if (
//         window.pJSDom[0].pJS.particles &&
//         window.pJSDom[0].pJS.particles.array
//     ) {
//         count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
//     }
//     requestAnimationFrame(update);
// };
// requestAnimationFrame(update);
