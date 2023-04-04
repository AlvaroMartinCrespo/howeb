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
});
