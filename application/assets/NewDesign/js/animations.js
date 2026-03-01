document.addEventListener("DOMContentLoaded", function () {
    const reveals = document.querySelectorAll(".reveal");

    const revealOnScroll = function () {
        const windowHeight = window.innerHeight;
        const elementVisible = 150;

        reveals.forEach((reveal) => {
            const elementTop = reveal.getBoundingClientRect().top;
            if (elementTop < windowHeight - elementVisible) {
                reveal.classList.add("active");
            } else {
                reveal.classList.remove("active");
            }
        });
    };

    window.addEventListener("scroll", revealOnScroll);
    // Trigger once on load
    revealOnScroll();

    // Experience Card Detail Toggle
    const detailToggles = document.querySelectorAll(".detail-toggle");
    detailToggles.forEach(button => {
        button.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const target = document.getElementById(targetId);
            const icon = this.querySelector(".material-symbols-outlined");

            // Toggle the visibility
            if (target.style.maxHeight && target.style.maxHeight !== "0px") {
                target.style.maxHeight = "0px";
                if (icon) icon.style.transform = "rotate(0deg)";
                this.classList.remove("active");
            } else {
                target.style.maxHeight = target.scrollHeight + "px";
                if (icon) icon.style.transform = "rotate(180deg)";
                this.classList.add("active");
            }
        });
    });
});
