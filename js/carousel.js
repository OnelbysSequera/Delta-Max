const carouselSlide = document.querySelector('.carousel-slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let counter = 0;
const slideWidth = carouselSlide.clientWidth;

nextBtn.addEventListener('click', () => {
  if (counter < carouselSlide.children.length - 1) {
    counter++;
    carouselSlide.style.transform = `translateX(-${counter * slideWidth}px)`;
  }
});

prevBtn.addEventListener('click', () => {
  if (counter > 0) {
    counter--;
    carouselSlide.style.transform = `translateX(-${counter * slideWidth}px)`;
  }
});

function autoSlide() {
  if (counter < carouselSlide.children.length - 1) {
    counter++;
  } else {
    counter = 0;
  }
  carouselSlide.style.transform = `translateX(-${counter * slideWidth}px)`;
}

setInterval(autoSlide, 4000);
