console.log('Travel Hero block script loaded');


document.addEventListener("DOMContentLoaded", function () {

  const track = document.querySelector(".slider-track");
  const slides = document.querySelectorAll(".slide");

  let isDragging = false;
  let startX;
  let currentTranslate = 0;
  let prevTranslate = 0;
  let currentIndex = 0;

  const gap = 24; // gap-6
  const slideWidth = slides[0].offsetWidth + gap;

  // --- Mouse Events ---
  track.addEventListener("mousedown", startDrag);
  track.addEventListener("mouseup", endDrag);
  track.addEventListener("mouseleave", endDrag);
  track.addEventListener("mousemove", drag);

  // --- Touch Events ---
  track.addEventListener("touchstart", startDrag);
  track.addEventListener("touchend", endDrag);
  track.addEventListener("touchmove", drag);

  function startDrag(e) {
    isDragging = true;
    startX = getPositionX(e);
    track.classList.remove("transition-transform");
  }

  function drag(e) {
    if (!isDragging) return;

    const currentPosition = getPositionX(e);
    const diff = currentPosition - startX;
    currentTranslate = prevTranslate + diff;

    track.style.transform = `translateX(${currentTranslate}px)`;
  }

  function endDrag(e) {
    if (!isDragging) return;
    isDragging = false;

    const movedBy = currentTranslate - prevTranslate;

    if (movedBy < -100 && currentIndex < slides.length - 2) {
      currentIndex++;
    }

    if (movedBy > 100 && currentIndex > 0) {
      currentIndex--;
    }

    setPositionByIndex();
  }

  function getPositionX(e) {
    return e.type.includes("mouse")
      ? e.pageX
      : e.touches[0].clientX;
  }

  function setPositionByIndex() {
    currentTranslate = -currentIndex * slideWidth;
    prevTranslate = currentTranslate;

    track.classList.add("transition-transform");
    track.style.transform = `translateX(${currentTranslate}px)`;
  }

});

