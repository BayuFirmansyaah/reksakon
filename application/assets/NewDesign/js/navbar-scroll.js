// Navbar scroll effect: transparent on top, white background when scrolled
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    if (!header) return;

    // Elements that need color toggling
    const navLinks = header.querySelectorAll('nav a');
    const brandTitle = header.querySelector('h2');
    const menuToggle = header.querySelector('#mobile-menu-toggle');
    const logo = header.querySelector('img');

    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('navbar-scrolled');
            header.classList.remove('navbar-transparent');
        } else {
            header.classList.remove('navbar-scrolled');
            header.classList.add('navbar-transparent');
        }
    }

    // Run on load
    handleScroll();
    window.addEventListener('scroll', handleScroll, { passive: true });
});
