document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Gather all form inputs
            const inputs = form.querySelectorAll("input, textarea, select");
            let formData = {};
            let allFilled = true;

            inputs.forEach(input => {
                const label = input.previousElementSibling?.textContent ||
                    input.closest(".flex.flex-col")?.querySelector("label")?.textContent ||
                    input.id || "Field";

                if (input.tagName === "SELECT") {
                    formData[label.trim()] = input.options[input.selectedIndex]?.text || "";
                } else {
                    formData[label.trim()] = input.value;
                }

                if (input.hasAttribute("required") && !input.value.trim()) {
                    allFilled = false;
                    input.classList.add("border-red-400");
                    input.classList.remove("border-gray-200");
                } else {
                    input.classList.remove("border-red-400");
                }
            });

            // Build mailto body
            let bodyLines = [];
            for (const [key, value] of Object.entries(formData)) {
                if (value.trim()) {
                    bodyLines.push(`${key}: ${value}`);
                }
            }

            const subject = formData["Subjek"] || "Pertanyaan dari Website";
            const body = bodyLines.join("\n");
            const mailtoUrl = `mailto:marketing@reksakon.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

            // Open mailto
            window.location.href = mailtoUrl;

            // Show success feedback
            const btn = form.querySelector("button[type='submit'], button:last-of-type");
            if (btn) {
                const originalText = btn.innerHTML;
                btn.innerHTML = `<span class="material-symbols-outlined text-sm">check_circle</span> <span>Membuka email...</span>`;
                btn.classList.add("bg-green-600");
                btn.classList.remove("bg-primary");

                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.classList.remove("bg-green-600");
                    btn.classList.add("bg-primary");
                }, 3000);
            }
        });
    });
});
