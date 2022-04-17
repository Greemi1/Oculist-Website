const menu = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .nav');
const header = document.querySelector('.header');

menu.addEventListener('click', function(event){
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
});

window.addEventListener('scroll', function(event){
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if(window.scrollY > 0){
      header.classList.add('active');
  } else {
      header.classList.remove('active');
  }
});

const swiper = new Swiper(".reviews-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 3,
        },
      },
  });