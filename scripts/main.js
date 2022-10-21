

// Burger Toggler
$('.gn-trig').on('click', function(e) {
    e.preventDefault();
    if($(this).hasClass('is-active')) {
        $(this).removeClass('is-active');
    } else {
        $(this).addClass('is-active');
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

    burger.addEventListener('click', () => {
        // Toggle Nav

        console.log(burger.dataset.open);

        if(burger.dataset.open == 0) {

            nav.classList.toggle('nav-active');

            gsap.to('.js-menu-item', {
                opacity: 1, 
                x: 0,
                duration: 0.5,
                delay: 0.8,
                stagger: 0.1,
                onComplete: function(){
                    burger.dataset.open = 1;
                }
            });
        } else {
            gsap.to('.js-menu-item', {
                opacity: 0, 
                x: 90,
                duration: 0.5,
                stagger: {
                    from: 'end',
                    each: 0.1
                },
                onComplete: function(){
                    burger.dataset.open = 0;
                    nav.classList.toggle('nav-active');
                }
            })
        }
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