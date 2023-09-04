function startSlider() {
    const sliderContainer = document.querySelector('.slider-container');
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slides[0].offsetWidth;
    let counter = 1;
  
    setInterval(() => {
      sliderContainer.style.transform = `translateX(-${slideWidth * counter}px)`;
      counter++;
      if (counter === slides.length) {
        counter = 0;
      }
    }, 2500);
    
  }
  
  startSlider();
  