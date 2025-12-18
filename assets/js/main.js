const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("navLinks");

hamburger.addEventListener("click", () => {
    navLinks.style.display =
        navLinks.style.display === "flex" ? "none" : "flex";
});
window.addEventListener("resize", () => {
    if (window.innerWidth > 900) {
        navLinks.style.display = "flex";
    } else {
        navLinks.style.display = "none";
    }
});