document.addEventListener("DOMContentLoaded", function () {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const mobileNav = document.querySelector(".mobile-nav");
    const closeMenuButton = document.querySelector(".close-menu");

    navbarToggler.addEventListener("click", function () {
        mobileNav.classList.add("open");
    });

    closeMenuButton.addEventListener("click", function () {
        mobileNav.classList.remove("open");
    });

    window.addEventListener("click", function (event) {
        if (!mobileNav.contains(event.target) && !navbarToggler.contains(event.target)) {
            mobileNav.classList.remove("open");
        }
    });
});
