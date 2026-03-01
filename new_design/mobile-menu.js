document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("mobile-menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");
    const menuClose = document.getElementById("mobile-menu-close");
    const menuOverlay = document.getElementById("mobile-menu-overlay");

    if (!menuToggle || !mobileMenu) return;

    function openMenu() {
        mobileMenu.classList.remove("translate-x-full");
        mobileMenu.classList.add("translate-x-0");
        menuOverlay.classList.remove("opacity-0", "pointer-events-none");
        menuOverlay.classList.add("opacity-100");
        document.body.style.overflow = "hidden";
    }

    function closeMenu() {
        mobileMenu.classList.remove("translate-x-0");
        mobileMenu.classList.add("translate-x-full");
        menuOverlay.classList.remove("opacity-100");
        menuOverlay.classList.add("opacity-0", "pointer-events-none");
        document.body.style.overflow = "";
    }

    menuToggle.addEventListener("click", openMenu);
    if (menuClose) menuClose.addEventListener("click", closeMenu);
    if (menuOverlay) menuOverlay.addEventListener("click", closeMenu);

    // Close on nav link click
    mobileMenu.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", closeMenu);
    });
});
