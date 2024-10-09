// slider.js
window.onload = function() {
    let currentSlide = 0;
    const slides = document.querySelectorAll(".slider img");
    const navButtons = document.querySelectorAll(".slider-nav a");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? "block" : "none";
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    navButtons.forEach((button, index) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    showSlide(currentSlide); // Show first slide on load

    // Auto-slide every 3 seconds (optional)
    setInterval(nextSlide, 4000);
};
