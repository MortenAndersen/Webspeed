document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".carousel").forEach((carousel) => {
        const track = carousel.querySelector(".carousel-track");
        const items = Array.from(track.querySelectorAll(".carousel-item"));
        const prevButton = carousel.querySelector(".prev");
        const nextButton = carousel.querySelector(".next");

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
            itemWidth = track.querySelector(".carousel-item").getBoundingClientRect().width;
        }

        function slideTo(index, animate = true) {
            const offset = -index * (itemWidth + gap);
            track.style.transition = animate ? "transform 0.5s ease" : "none";
            track.style.transform = `translateX(${offset}px)`;
        }

        function handleSlide(newIndex) {
            if (isSliding) return;
            isSliding = true;
            currentIndex = newIndex;
            slideTo(currentIndex);
        }

        window.addEventListener("load", () => {
            updateMeasurements();
            slideTo(currentIndex, false);

            nextButton.addEventListener("click", () => handleSlide(currentIndex + 1));
            prevButton.addEventListener("click", () => handleSlide(currentIndex - 1));

            track.addEventListener("transitionend", () => {
                const maxIndex = items.length - visibleItems;
                if (currentIndex > maxIndex) {
                    currentIndex = 0;
                    slideTo(currentIndex, false);
                } else if (currentIndex < 0) {
                    currentIndex = items.length - visibleItems;
                    slideTo(currentIndex, false);
                }
                isSliding = false;
            });

            window.addEventListener("resize", () => {
                updateMeasurements();
                slideTo(currentIndex, false);
            });

            const autoSlide = setInterval(() => {
                if (currentIndex < items.length - visibleItems) {
                    handleSlide(currentIndex + 1);
                }
            }, 3000);

            [track, nextButton, prevButton].forEach((el) => {
                el.addEventListener("mouseenter", () => clearInterval(autoSlide));
                el.addEventListener("touchstart", () => clearInterval(autoSlide));
            });
        });
    });
});
