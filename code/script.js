document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const mobileNav = document.querySelector('.mobile-nav');

    if (navbarToggler && mobileNav) {
        navbarToggler.addEventListener('click', function() {
            alert('Burger menu clicked!');
            mobileNav.classList.toggle('active');
        });
    } else {
        console.error('Navbar toggler or mobile navigation not found.');
    }
});
