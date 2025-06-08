document.addEventListener("DOMContentLoaded", () => {
  const carousels = document.querySelectorAll(".carousel");

  carousels.forEach((carousel) => {
    const track = carousel.querySelector(".carousel-track");
    const slides = carousel.querySelectorAll(".carousel-slide");
    const prevButton = carousel.querySelector(".carousel-button.prev");
    const nextButton = carousel.querySelector(".carousel-button.next");

    if (!track || !slides.length || !prevButton || !nextButton) return;

    let currentSlide = 0;

    function updateSlidePosition() {
      const slideWidth = slides[0].getBoundingClientRect().width || 200;
      track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    function changeSlide(direction) {
      currentSlide += direction;

      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      } else if (currentSlide >= slides.length) {
        currentSlide = 0;
      }

      updateSlidePosition();
    }

    // Wait until images are loaded, then init
    if (slides[0].complete) {
      updateSlidePosition();
    } else {
      slides[0].addEventListener("load", updateSlidePosition);
    }

    prevButton.addEventListener("click", () => changeSlide(-1));
    nextButton.addEventListener("click", () => changeSlide(1));

    window.addEventListener("resize", updateSlidePosition);
  });
});
