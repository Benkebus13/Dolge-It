const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');



    burger.addEventListener('click', () => {
        // Toggle nav
        nav.classList.toggle('nav-active');
  
    //Animate links
    navLinks.forEach((link, index) => {
        const newLocal = link.style.animation;
        if (newLocal) {
            link.style.animation = ''
        } else {
            link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s';
        }
    });
    burger.classList.toggle('toggle');
});

}


navSlide();