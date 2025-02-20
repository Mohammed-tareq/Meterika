// ================================= scroll navbar ===============================================

// الحصول على الـ navbar
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
    // تغيير لون الخلفية عند التمرير
    if (window.scrollY > 50) {
        navbar.classList.add("bg-dark");
    } else {
        navbar.classList.remove("bg-dark");
    }

    let navbarToggler = document.querySelector(".navbar-toggler");
    let navbarCollapse = document.querySelector(".navbar-collapse");

    navbarToggler.addEventListener("click", function () {
        if (navbarCollapse.classList.contains("show")) {
            navbarCollapse.style.backgroundColor = "black";
        } else {
            navbarCollapse.style.backgroundColor = "transparent"; // يرجع شفاف مرة أخرى
        }
    });
});
