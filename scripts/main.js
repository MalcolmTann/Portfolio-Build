
const navSlide = () => {
    const burger = document.querySelector('.gn-trig');

    burger.addEventListener('click', () => {
        
        let currOpen = burger.dataset.open;
        burger.dataset.open = 1;
        
        if(currOpen == 0) {

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
                onComplete: function(){
                    burger.dataset.open = 2;
                }
            });
        } else if(currOpen == 2) {
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
                onComplete: function(){
                    burger.dataset.open = 0;
                    burger.classList.remove('is-active');
                }
            });
        }
    });
} 
navSlide();

