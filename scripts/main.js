

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

// Scroll Animation (Projects)
function showProjects() {
    var projects = document.querySelectorAll(".hidden");
    var windowHeight = window.innerHeight;
    
    const startVisible = 100;

    for ( var i=0; i < projects.length; i++) {
        var boxTop = projects[i].getBoundingClientRect().top;

        //console.log ("window-visible "+ (windowHeight - startVisible), "boxtop= "+boxTop);

        if(boxTop < windowHeight - startVisible) {
            projects[i].classList.add("show");
        }else {
           projects[i].classList.remove("show");
        }
    }
}

window.addEventListener("scroll", showProjects)


// const navSlide = () => {
//     const burger = document.querySelector('.gn-trig');
//     const nav = document.querySelector('.gn-items');
//     // const navLinks = document.querySelectorAll('.gn-items li');

//     burger.addEventListener('click', () => {
//         // Toggle Nav
//         nav.classList.toggle('nav-active');
//     });
// }

// navSlide();