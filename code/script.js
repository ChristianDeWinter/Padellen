document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation
    const mobileNavToggle = document.querySelector('.navbar-toggler');
    const mobileNav = document.querySelector('.mobile-nav');
    const closeMenu = document.querySelector('.close-menu');

    mobileNavToggle.addEventListener('click', () => {
        mobileNav.classList.toggle('open');
    });

    closeMenu.addEventListener('click', () => {
        mobileNav.classList.remove('open');
    });

    const mobileNavLinks = document.querySelectorAll('.mobile-nav a');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('open');
        });
    });
});
