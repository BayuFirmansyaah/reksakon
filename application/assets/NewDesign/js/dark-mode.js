document.addEventListener("DOMContentLoaded", function () {
    const html = document.documentElement;
    const toggleBtn = document.getElementById("dark-mode-toggle");
    const toggleIcon = document.getElementById("dark-mode-icon");

    // Always default to light theme (ignore device dark mode setting)
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        html.className = savedTheme;
    } else {
        html.className = "light";
    }

    function updateIcon() {
        if (!toggleIcon) return;
        toggleIcon.textContent = html.classList.contains("dark") ? "light_mode" : "dark_mode";
    }

    updateIcon();

    if (toggleBtn) {
        toggleBtn.addEventListener("click", function () {
            html.classList.toggle("dark");
            html.classList.toggle("light");

            // Ensure only one class
            if (html.classList.contains("dark")) {
                html.classList.remove("light");
            } else {
                html.classList.remove("dark");
                html.classList.add("light");
            }

            localStorage.setItem("theme", html.className);
            updateIcon();
        });
    }
});
