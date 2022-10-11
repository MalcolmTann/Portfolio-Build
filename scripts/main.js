

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


let tl = gsap.timeline({defaults: {ease: 'power1.out'}});

tl.to('.text', {y:'0%', duration: 1, stagger: 0.25});


    



// const navSlide = () => {
//     const burger = document.querySelector('.gn-trig');
//     const nav = document.querySelector('.gn-items');
//     const navLinks = document.querySelectorAll('.gn-items li');

//     burger.addEventListener('click', () => {
//         // Toggle Nav
//         nav.classList.toggle('nav-active');
//     });
// }

// navSlide();