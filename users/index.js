

const navbar = document.getElementById('navbar');
const navbarToggle = document.getElementById('navbarToggle');

navbarToggle.addEventListener('click', () => {
  navbar.classList.toggle('-translate-x-full');
});


/// JavaScript to make the carousel slide with next and prev buttons

const carousel = document.querySelector('.carousel');
const carousel1 = document.querySelector('.carousel1');
const carousel2 = document.querySelector('.carousel2');
const carousel3 = document.querySelector('.carousel3');
const carousel4 = document.querySelector('.carousel4');
const carousel5 = document.querySelector('.carousel5');
const carousel6 = document.querySelector('.carousel6');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const prevBtn1 = document.querySelector('.prev-btn1');
const nextBtn1 = document.querySelector('.next-btn1');
const prevBtn2 = document.querySelector('.prev-btn2');
const nextBtn2 = document.querySelector('.next-btn2');
const prevBtn3 = document.querySelector('.prev-btn3');
const nextBtn3 = document.querySelector('.next-btn3');
const prevBtn4 = document.querySelector('.prev-btn4');
const nextBtn4 = document.querySelector('.next-btn4');
const prevBtn5 = document.querySelector('.prev-btn5');
const nextBtn5 = document.querySelector('.next-btn5');
const prevBtn6 = document.querySelector('.prev-btn6');
const nextBtn6 = document.querySelector('.next-btn6');


let translateX = 0;
let slideWidth = 0; // 1 item width
let itemsToShow = 4; // 1 item width


function updateSlideWidth() {
  // Update the slideWidth based on the number of items visible per row
  const windowWidth = window.innerWidth;
  if (windowWidth >= 1024) {
    slideWidth = 25;
     itemsToShow = 4;
  } else if (windowWidth >= 768) {
    slideWidth = 50;
     itemsToShow = 2;
  } else {
    slideWidth = 100;
     itemsToShow = 1;
  }
  // slideWidth = 100 / itemsToShow;
  // Update the slideWidth based on the number of items visible per row
  // const windowWidth = window.innerWidth;
  // const itemsToShow = 4; // Set the number of items you want to show
  // slideWidth = 100 / itemsToShow;
}

function slideNext() {
  translateX -= slideWidth;

  if (translateX < -slideWidth * (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel.style.transform = `translateX(${translateX}%)`;
}
function slideNext1() {
  translateX -= slideWidth;
  if (translateX < -slideWidth *  (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel1.style.transform = `translateX(${translateX}%)`;
}
function slideNext2() {
  translateX -= slideWidth;
  if (translateX < -slideWidth *  (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel2.style.transform = `translateX(${translateX}%)`;
}
function slideNext3() {
  translateX -= slideWidth;
  if (translateX < -slideWidth *  (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel3.style.transform = `translateX(${translateX}%)`;
}
function slideNext4() {
  translateX -= slideWidth;
  if (translateX < -slideWidth *  (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel4.style.transform = `translateX(${translateX}%)`;
}
function slideNext5() {
  translateX -= slideWidth;
  if (translateX < -slideWidth *  (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel5.style.transform = `translateX(${translateX}%)`;
}
function slideNext6() {
  translateX -= slideWidth;
  if (translateX < -slideWidth *  (carousel.children.length - itemsToShow)) {
    translateX = 0;
  }
  carousel6.style.transform = `translateX(${translateX}%)`;
}

function slidePrev() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel.style.transform = `translateX(${translateX}%)`;
  carousel1.style.transform = `translateX(${translateX}%)`;
  carousel2.style.transform = `translateX(${translateX}%)`;
}
function slidePrev1() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel1.style.transform = `translateX(${translateX}%)`;
}
function slidePrev2() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel2.style.transform = `translateX(${translateX}%)`;
}
function slidePrev3() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel3.style.transform = `translateX(${translateX}%)`;
}
function slidePrev4() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel4.style.transform = `translateX(${translateX}%)`;
}
function slidePrev5() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel5.style.transform = `translateX(${translateX}%)`;
}
function slidePrev6() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth *  (carousel.children.length - itemsToShow);
  }
  carousel6.style.transform = `translateX(${translateX}%)`;
}

// Initial slide width update
updateSlideWidth();

// Handle slide width update on window resize
window.addEventListener('resize', () => {
  updateSlideWidth();
});

nextBtn.addEventListener('click', slideNext);
prevBtn.addEventListener('click', slidePrev);
nextBtn1.addEventListener('click', slideNext1);
prevBtn1.addEventListener('click', slidePrev1);
nextBtn2.addEventListener('click', slideNext2);
prevBtn2.addEventListener('click', slidePrev2);
nextBtn3.addEventListener('click', slideNext3);
prevBtn3.addEventListener('click', slidePrev3);
nextBtn4.addEventListener('click', slideNext4);
prevBtn4.addEventListener('click', slidePrev4);
nextBtn5.addEventListener('click', slideNext5);
prevBtn5.addEventListener('click', slidePrev5);
nextBtn6.addEventListener('click', slideNext6);
prevBtn6.addEventListener('click', slidePrev6);







