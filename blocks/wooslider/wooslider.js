document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".carousel").forEach((carousel) => {
        const track = carousel.querySelector(".carousel-track");
        const items = Array.from(track.querySelectorAll(".carousel-item"));
        const prevButton = carousel.querySelector(".prev");
        const nextButton = carousel.querySelector(".next");

        if (!track || items.length === 0 || !prevButton || !nextButton) return;

        let currentIndex = 0;
        let itemWidth = 0;
        let gap = 0;
        let visibleItems = 1;
        let isSliding = false;
        let maxIndex = 0;

        function getVisibleItems() {
            const width = window.innerWidth;
            if (width >= 1200) return 4; // 4 items visible on large screens
            if (width >= 900) return 3; // 3 items visible on medium screens
            if (width >= 320) return 2; // 2 items visible on smaller screens
            return 1; // 1 item visible on mobile
        }

        function updateMeasurements() {
            visibleItems = getVisibleItems();
            const style = window.getComputedStyle(track);
            gap = parseFloat(style.gap) || 0;
            itemWidth = items[0].getBoundingClientRect().width;
            maxIndex = Math.max(0, items.length - visibleItems);
        }

        function slideTo(index, animate = true) {
            const offset = -index * (itemWidth + gap);
            track.style.transition = animate ? "transform 0.5s ease" : "none";
            track.style.transform = `translateX(${offset}px)`;
        }

        function handleSlide(newIndex) {
            if (isSliding) return;
            isSliding = true;

            // Hvis der er 8 eller flere items, ryk med visibleItems
            const slideAmount = items.length >= 8 ? visibleItems : 1;

            if (newIndex > maxIndex) {
                currentIndex = 0; // Loop tilbage til start
            } else if (newIndex < 0) {
                currentIndex = maxIndex; // Loop til slutningen
            } else {
                currentIndex = newIndex;
            }

            slideTo(currentIndex);
        }

        function checkButtonVisibility() {
            // Skjul knapper hvis der ikke er nok items
            if (items.length <= visibleItems) {
                prevButton.style.display = "none";
                nextButton.style.display = "none";
            } else {
                prevButton.style.display = "";
                nextButton.style.display = "";
            }

            // Hvis currentIndex er uden for grænserne, opdater det
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
                slideTo(currentIndex, false);
            }
        }

        // Init slider
        updateMeasurements();
        checkButtonVisibility();
        slideTo(currentIndex, false);

        // Håndter knapklik for at slide 1 item eller flere afhængig af antal items
        nextButton.addEventListener("click", () => handleSlide(currentIndex + (items.length >= 8 ? visibleItems : 1))); 
        prevButton.addEventListener("click", () => handleSlide(currentIndex - (items.length >= 8 ? visibleItems : 1))); 

        track.addEventListener("transitionend", () => {
            isSliding = false;
        });

        window.addEventListener("resize", () => {
            updateMeasurements();
            checkButtonVisibility();
            slideTo(currentIndex, false);
        });
    });
});
