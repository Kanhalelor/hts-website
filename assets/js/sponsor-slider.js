const sponsors = [
    "assets/images/sponsors/s1.png",
    "assets/images/sponsors/s2.png",
    "assets/images/sponsors/s3.png",
    "assets/images/sponsors/s4.png",
    "assets/images/sponsors/s5.png",
    "assets/images/sponsors/s6.png"
];

let sponsorIndex = 0;

function showSponsors() {
    const container = document.getElementById("sponsorContainer");
    container.innerHTML = "";

    for (let i = 0; i < 5; i++) {
        const img = sponsors[(sponsorIndex + i) % sponsors.length];
        container.innerHTML += `<img src="${img}" height="60">`;
    }
}

function nextSponsor() {
    sponsorIndex = (sponsorIndex + 1) % sponsors.length;
    showSponsors();
}

function prevSponsor() {
    sponsorIndex = (sponsorIndex - 1 + sponsors.length) % sponsors.length;
    showSponsors();
}

showSponsors();
