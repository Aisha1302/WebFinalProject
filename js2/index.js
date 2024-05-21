
// & S  C  R  O  L  L      N  A  V  B  A  R
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) { // Change 50 to the desired scroll threshold
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// & S  L  I  D  E  R

function createSlider(sliderName, intervalTime) {
  let currentIndex = 0;

  const slides = document.querySelectorAll(`#${sliderName} .slide`);
  const totalSlides = slides.length;

  function showNextSlide() {
      slides[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % totalSlides;
      slides[currentIndex].classList.add('active');
      updateSlidePosition();
  }

  function updateSlidePosition() {
      const slidesContainer = document.querySelector(`#${sliderName} .slides`);
      slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  setInterval(showNextSlide, intervalTime);

  updateSlidePosition();
}

createSlider('supplements-slider', 2000); 
createSlider('equipment-slider', 2000); 
createSlider('clothes-slider', 2000); 
