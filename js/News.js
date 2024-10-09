document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const wrapper = document.querySelector(".wrapper");
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;

    let isDragging = false, startX, startScrollLeft, timeoutId;

    // Helper function to update carousel scroll
    const updateScroll = (distance) => {
        const maxScrollLeft = carousel.scrollWidth - carousel.offsetWidth;
        carousel.scrollLeft = Math.max(0, Math.min(maxScrollLeft, carousel.scrollLeft + distance));
    };

    const dragStart = (e) => {
        isDragging = true;
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
        carousel.classList.add("dragging");
    };

    const dragging = (e) => {
        if (!isDragging) return;
        updateScroll(startScrollLeft - (e.pageX - startX) - carousel.scrollLeft);
    };

    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    };

    const autoPlay = () => {
        if (window.innerWidth < 800 || carousel.scrollLeft >= carousel.scrollWidth - carousel.offsetWidth) return;
        timeoutId = setTimeout(() => updateScroll(firstCardWidth), 2500);
    };

    // Event listeners for dragging
    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);

    // Pause autoplay on hover, resume on leave
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    // Arrow button navigation
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => updateScroll(btn.id === "left" ? -firstCardWidth : firstCardWidth));
    });

    // Start autoplay
    autoPlay();
});


