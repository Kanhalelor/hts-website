// Counter Animation Script

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
        const target = +counter.getAttribute("data-target");
        const speed = 200; // smaller = faster

        const updateCount = () => {
            const current = +counter.innerText;
            const increment = Math.ceil(target / speed);

            if (current < target) {
                counter.innerText = current + increment;
                setTimeout(updateCount, 25);
            } else {
                counter.innerText = target + "+";
            }
        };

        updateCount();
    });
});
