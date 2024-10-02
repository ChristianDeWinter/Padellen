document.addEventListener('DOMContentLoaded', function() {
    const burgerButton = document.querySelector('.navbar-toggler');
    const mobileNav = document.querySelector('.mobile-nav');
    const closeButton = document.querySelector('.close-menu');
    const header = document.querySelector('header');

    burgerButton.addEventListener('click', function() {
        const expanded = burgerButton.getAttribute('aria-expanded') === 'true';
        burgerButton.setAttribute('aria-expanded', !expanded);
        mobileNav.classList.toggle('active');
    });

    closeButton.addEventListener('click', function() {
        mobileNav.classList.remove('active');
        burgerButton.setAttribute('aria-expanded', 'false');
    });

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
