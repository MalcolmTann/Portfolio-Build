
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

const navSlide = () => {
    const burger = document.querySelector('.gn-trig');
    const nav = document.querySelector('.gn-items');
    // const navLinks = document.querySelectorAll('.gn-items li');

    burger.addEventListener('click', () => {
        // Toggle Nav
        nav.classList.toggle('nav-active');
    });
}

navSlide();