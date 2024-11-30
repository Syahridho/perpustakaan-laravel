import "./bootstrap";

import Alpine from "alpinejs";

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".hidden a");
function setActiveLink() {
    sections.forEach((section, index) => {
        const rect = section.getBoundingClientRect();
        const navLink = navLinks[index];

        // Jika bagian terlihat di viewport (misalnya, atas elemen mendekati atas viewport)
        if (rect.top <= 20 && rect.bottom >= 20) {
            navLinks.forEach((link) =>
                link.classList.remove("bg-slate-800", "text-white")
            );
            navLink.classList.add("bg-slate-800", "text-white");
        }
    });
}

// Jalankan fungsi ketika halaman di-scroll
window.addEventListener("scroll", setActiveLink);

window.Alpine = Alpine;

Alpine.start();
