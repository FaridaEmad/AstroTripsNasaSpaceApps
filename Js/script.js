const navbar = document.querySelector('.nav-fixed');
window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add('fe-shadow');
    } else {
        navbar.classList.remove('fe-shadow');
    }
};
