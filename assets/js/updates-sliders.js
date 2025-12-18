const updates = [
    { img: "assets/images/updates/update1.jpg", text: "Science Fair Winners 2025" },
    { img: "assets/images/updates/update2.jpg", text: "New Workshop Block Opened" },
    { img: "assets/images/updates/update3.jpg", text: "Inter-School Sports Champions" },
    { img: "assets/images/updates/update4.jpg", text: "ICT Lab Upgrade Completed" }
];

let updateIndex = 0;

function showUpdates() {
    const container = document.getElementById("updatesContainer");
    container.innerHTML = "";

    for (let i = 0; i < 3; i++) {
        const item = updates[(updateIndex + i) % updates.length];
        container.innerHTML += `
            <div class="update-item box-style">
                <img src="${item.img}">
                <p>${item.text}</p>
            </div>`;
    }
}

function nextUpdate() {
    updateIndex = (updateIndex + 1) % updates.length;
    showUpdates();
}

function prevUpdate() {
    updateIndex = (updateIndex - 1 + updates.length) % updates.length;
    showUpdates();
}

showUpdates();
document.getElementById("nextUpdate").addEventListener("click", nextUpdate);
document.getElementById("prevUpdate").addEventListener("click", prevUpdate);const hamburger = document.getElementById("hamburger");
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