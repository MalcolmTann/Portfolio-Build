

// Burger Toggler
$('.gn-trig').on('click', function(e) {
    e.preventDefault();
    if($(this).hasClass('is-active')) {
        $(this).removeClass('is-active');
        $('.gn').slideUp();
    } else {
        $(this).addClass('is-active');
        $('.gn').slideDown();
    }
});

// Scroll Animation 
function showProjects() {
    var projects = document.querySelectorAll(".hidden");
    var windowHeight = window.innerHeight;
    
    const startVisible = 100;

    for ( var i=0; i < projects.length; i++) {
        var boxTop = projects[i].getBoundingClientRect().top;

        if(boxTop < windowHeight - startVisible) {
            projects[i].classList.add("show");
        }else {
           projects[i].classList.remove("show");
        }
    }
}

window.addEventListener("scroll", showProjects);



// Reveal Text - GSAP
let tl = gsap.timeline({defaults: {ease: 'power1.out'}});

tl.to('.text', {y:'0%', duration: 1, stagger: 0.25});



// Smooth Nav Slide
const navSlide = () => {
    const burger = document.querySelector('.gn-trig');
    const nav = document.querySelector('.gn-items');
    const navLinks = document.querySelectorAll('.gn-items li');


    burger.addEventListener('click', () => {
        // Toggle Nav
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = '';
            }else {
                link.style.animation = `navLinkFade 0.8s ease forwards ${index / 7 + 0.3}s`;
            }
        })
    });
}

navSlide();



// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});