const btn = document.getElementById("mobile-menu-button");
const menu = document.getElementById("mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    // Animasi ganti icon bars ke xmark jika diinginkan
    const icon = btn.querySelector("i");
    icon.classList.toggle("fa-bars-staggered");
    icon.classList.toggle("fa-xmark");
});