//================================================ start cursor =======================================





// ================================= scroll caption video ===============================================

// Initialize ScrollMagic controller
var controller = new ScrollMagic.Controller();

// Apply ScrollMagic animation to all elements with class .custom-scrollanim
$(".custom-scrollanim").each(function() {
  var ourScene = new ScrollMagic.Scene({
    triggerElement: this,   // The element that triggers the animation
    reverse: true,         // The animation happens only once
    triggerHook: 0.5        // Trigger when 70% of the element is in view
  })
  .setClassToggle(this, "custom-scrollanim-active")  // Add custom-scrollanim-active class to trigger animation
  .addTo(controller);  // Add the scene to the ScrollMagic controller
});


 // إضافة الأنيميشن عند تغيير الشرائح (في الكاروسيل)
 $('#myCarousel').on('slid.bs.carousel', function () {
  // استرجاع الشريحة النشطة
  var activeSlide = $('.carousel-item.active');
  activeSlide.find('.custom-scrollanim').each(function() {
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      reverse: true,
      triggerHook: 0.5
    })
    .setClassToggle(this, "custom-scrollanim-active")
    .addTo(controller);
  });
});


/* اللي تحته انه يرتفع ي هوباsection منع ال*/

document.addEventListener("DOMContentLoaded", function () {
  function adjustCarouselHeight() {
      let carousel = document.querySelector(".carousel-inner");
      let activeItem = document.querySelector(".carousel-item.active");

      if (activeItem) {
          let activeHeight = activeItem.offsetHeight;
          carousel.style.height = activeHeight + "px";
      }
  }

 
});


// ================================= scroll section commitments ===============================================

// scroll text
AOS.init();

// ScrollMagic Controller
var controller = new ScrollMagic.Controller();

// حدد العنصر الذي سيظهر فيه العداد
$(".image-container").each(function() {
  var $counters = $(this).find(".counter");

  $counters.each(function() {
    var $counter = $(this);
    var targetNumber = $counter.data("count"); // الرقم الذي نريد العداد للوصول إليه

    // إنشاء مشهد ScrollMagic لكل عداد
    var scene = new ScrollMagic.Scene({
      triggerElement: this, // العنصر الذي سيتفاعل معه المشهد
      triggerHook: 0.5, // سيبدأ الانيميشن عند الوصول إلى المنتصف
      duration: "100%" // العرض الذي سيأخذ فيه التأثير
    })
    .on("enter", function() {
      // بدء عداد الرقم عند التمرير على العنصر
      $counter.css("opacity", 1); // إظهار العداد
      animateNumber($counter, targetNumber);
    })
    .addTo(controller);
  });
});

// دالة عداد الرقم
function animateNumber($element, targetNumber) {
  $({count: 0}).animate({count: targetNumber}, {
    duration: 2000, // مدة العد
    easing: "swing", // تأثير الحركة
    step: function() {
      $element.text(Math.ceil(this.count)); // تحديث النص في كل خطوة
    }
  });
}



//=============================================== start used animation in section project and ===========================================

/* Scroll animations */
var controller = new ScrollMagic.Controller();

$(".js-img-scale").each(function() {
  var ourScene1 = new ScrollMagic.Scene({
    triggerElement: this,
    reverse: true,
    triggerHook: 0.7
  })
  .setClassToggle(this, "js-img-scale-active")
  .addTo(controller);
});

$(".js-scrollanim").each(function() {
  var ourScene2 = new ScrollMagic.Scene({
    triggerElement: this,
    reverse: true,
    triggerHook: 0.7
  })
  .setClassToggle(this, "js-scrollanim-active")
  .addTo(controller);
});




// ================================= scroll section our services ================================================
  
  document.addEventListener("DOMContentLoaded", () => {
    const serviceItems = document.querySelectorAll('.type-of-food');
  
    // إنشاء مراقب للصور
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible'); // عند ظهور الصورة
        } else {
          entry.target.classList.remove('visible'); // عند الخروج من الشاشة
        }
      });
    }, {
      threshold: 0.3, // يتم التفاعل عندما يكون 30% من العنصر مرئيًا
    });
  
    // مراقبة كل عنصر خدمة
    serviceItems.forEach((item) => {
      observer.observe(item);
    });
  });
  
