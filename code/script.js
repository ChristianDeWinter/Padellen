document.addEventListener('DOMContentLoaded', function() {
    const burgerButton = document.querySelector('.navbar-toggler');
    const mobileNav = document.querySelector('.mobile-nav');
    const closeButton = document.querySelector('.close-menu');

    burgerButton.addEventListener('click', function() {
        mobileNav.classList.toggle('active');
    });

    closeButton.addEventListener('click', function() {
        mobileNav.classList.remove('active');
    });
});
