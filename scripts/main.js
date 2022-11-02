// burger menu icon
const burger = document.querySelector('.gn-trig');

// Mobile Menu Toggle
const menuSlider = () => {

    burger.addEventListener('click', () => {
        
        let menuOpen = burger.dataset.open;
        // Blocks the if and else statements below from running before their actions are completed
        burger.dataset.open = 1;
        
        // onClick, burger menu is set to 0
        if(menuOpen == 0) {

            // animate burger menu
            burger.classList.add('is-active');

            let navTlIn = gsap.timeline();
            navTlIn.to('.js-menu-bg', {
                opacity: 1,
                x: 0,
                duration: 0.5
            });

            navTlIn.to('.js-menu-item', {
                opacity: 1, 
                x: 0,
                duration: 0.5,
                stagger: 0.1,
                // Oncomplete, set dataset to 2
                onComplete: function(){
                    burger.dataset.open = 2;
                }
            });
        // if dataset is 2, then this code can be run
        } else if(menuOpen == 2) {
            let navTlOut = gsap.timeline();

            navTlOut.to('.js-menu-item', {
                opacity: 0, 
                x: 90,
                duration: 0.5,
                stagger: {
                    from: 'end',
                    each: 0.1
                },
            });

            navTlOut.to('.js-menu-bg', {
                opacity: 0,
                x: '100%',
                duration: 0.5,
                // onComplete, dataset is reset to 0 and burger is reset to orignal state
                onComplete: function(){
                    burger.dataset.open = 0;
                    burger.classList.remove('is-active');
                }
            });
        }
    });
}
menuSlider();

// Shows the navigation depending on viewport width
function showMenu(){
    // greater than 768px, show navbar
    if(window.innerWidth >= 768) {
        gsap.set(['.js-menu-bg', '.js-menu-item'], {
            opacity: 1,
            x: 0
        })
    } else {
        // less than 768px, show burger and slide menu off screen
        gsap.set(['.js-menu-bg', '.js-menu-item'], {
            opacity: 0,
            x: '100%'
        });
        burger.dataset.open = 0;
        burger.classList.remove('is-active');
    }
}
showMenu();
window.addEventListener('resize', showMenu);

