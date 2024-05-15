/*                  menu hamburguesa             */

let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
};

/*                  scroll active              */

document.addEventListener("DOMContentLoaded", function () {
  let sections = document.querySelectorAll("section");
  let navLinks = document.querySelectorAll("header nav a");

  window.addEventListener("scroll", function () {
    let scrollPosition =
      document.documentElement.scrollTop || document.body.scrollTop;

    sections.forEach((section) => {
      let offset = section.offsetTop - 150;
      let height = section.offsetHeight;
      let id = section.getAttribute("id");

      if (scrollPosition >= offset && scrollPosition < offset + height) {
        navLinks.forEach((link) => {
          link.classList.remove("active");
        });

        document
          .querySelector(`header nav a[href="#${id}"]`)
          .classList.add("active");
      }
    });
  });
});

/*                  NAV BAR STICKY                */

let header = document.querySelector(".header");

header.classList.toggle("sticky", window.scrollY > 100);

/*              borrar    menu hamburguesa             */
menuIcon.classList.remove("bx-x");
navbar.classList.remove("active");

/*                 swiper              */

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 50,
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/*                 scroll         */
document.addEventListener("DOMContentLoaded", function () {
  ScrollReveal({
    distance: "80px",
    duration: 1500,
    delay: 200,
  });

  ScrollReveal().reveal(".home-content, .heading", {
    origin: "top",
    once: true,
  });
  ScrollReveal().reveal(
    ".home-img, .services-container, .portafolio-box, .testimonial-wrapper, .contact form",
    { origin: "bottom" }
  );
  ScrollReveal().reveal(".home-content h1, .about-img img", { origin: "left" });
  ScrollReveal().reveal(".home-content h3, .home-content p .about-content", {
    origin: "right",
  });
});
