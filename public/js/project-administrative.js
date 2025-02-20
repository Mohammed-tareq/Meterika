// ============================================== library

// scroll text
AOS.init();


// ==============================================



// تهيئة Swiper
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  centeredSlides: true,
  loop: true,
  spaceBetween: 30, // المسافة بين الصور
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
});

// التعامل مع تكبير الصورة
const fullscreenOverlay = document.getElementById("fullscreen-overlay");
const fullscreenImg = document.getElementById("fullscreen-img");

// عند الضغط على الصورة، يتم فتحها بالحجم الكامل
document.querySelectorAll(".swiper-slide img").forEach(img => {
  img.addEventListener("click", function () {
      fullscreenImg.src = this.src;
      fullscreenOverlay.classList.add("active");
  });
});

// عند الضغط على أي مكان بالشاشة، يتم إغلاق الصورة المكبرة
fullscreenOverlay.addEventListener("click", function () {
  this.classList.remove("active");
});


