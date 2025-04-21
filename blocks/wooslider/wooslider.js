document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".carousel").forEach((carousel) => {
        const track = carousel.querySelector(".carousel-track");
        const items = Array.from(carousel.querySelectorAll(".carousel-item"));
        const prevButton = carousel.querySelector(".prev");
        const nextButton = carousel.querySelector(".next");

        // Stop hvis noget mangler
        if (!track || items.length === 0 || !prevButton || !nextButton) return;

        let currentIndex = 0;
        let itemWidth = 0;
        let gap = 0;
        let visibleItems = 1;
        let isSliding = false;

        function getVisibleItems() {
            const width = window.innerWidth;
            if (width >= 1200) return 4;
            if (width >= 900) return 3;
            if (width >= 320) return 2;
            return 1;
        }

        function updateMeasurements() {
            visibleItems = getVisibleItems();
            const style = window.getComputedStyle(track);
            gap = parseFloat(style.gap) || 0;
            itemWidth = items[0].getBoundingClientRect().width;
        }

        function slideTo(index, animate = true) {
            const offset = -index * (itemWidth + gap);
            track.style.transition = animate ? "transform 0.5s ease" : "none";
            track.style.transform = `translateX(${offset}px)`;
        }

        function handleSlide(newIndex) {
            if (isSliding) return;
            isSliding = true;

            const maxIndex = Math.max(0, items.length - visibleItems);

            if (newIndex > maxIndex) {
                currentIndex = 0;
            } else if (newIndex < 0) {
                currentIndex = maxIndex;
            } else {
                currentIndex = newIndex;
            }

            slideTo(currentIndex);
        }

        function checkButtonVisibility() {
            if (items.length <= visibleItems) {
                nextButton.disabled = true;
                prevButton.disabled = true;
            } else {
                nextButton.disabled = false;
                prevButton.disabled = false;
            }
        }

        // Initial setup
        updateMeasurements();
        slideTo(currentIndex, false);
        checkButtonVisibility();

        // Event listeners
        nextButton.addEventListener("click", () => handleSlide(currentIndex + visibleItems));
        prevButton.addEventListener("click", () => handleSlide(currentIndex - visibleItems));

        track.addEventListener("transitionend", () => {
            isSliding = false;
        });

        window.addEventListener("resize", () => {
            updateMeasurements();
            slideTo(currentIndex, false);
            checkButtonVisibility();
        });
    });
});
