document.addEventListener("DOMContentLoaded", ready);

function ready() {
    function burger() {
        const js__headerBurgerClick = document.querySelectorAll('.js__header-burgerclick')
        const js__headerBurger = document.querySelectorAll('.js__header-burger');
        const headerNavOpenJs = document.querySelector('.header-nav-open-js');
        const headerContentJs = document.querySelector('.header-content-js');
        const body = document.querySelector('body');
        const lockPaddingValue = window.innerWidth - body.offsetWidth + 'px'; //Получили ширину scroll
        const timeout = 400;


        for (let i = 0; i < js__headerBurgerClick.length; i++) {
            js__headerBurgerClick[i].addEventListener('click', () => {
                for (let i = 0; i < 3; i++)  {
                    js__headerBurger[i].classList.toggle('open');
                    headerNavOpenJs.classList.toggle('open');
                    body.classList.toggle('menu-lock');

                    bodylock();

                    if (!js__headerBurger[i].classList.contains('open')) {
                        bodyUnlock();
                    }
                }
            });

        }

        function bodylock() {
            body.style.paddingRight = lockPaddingValue;
            headerContentJs.style.paddingRight = lockPaddingValue;
            body.classList.add('menu-lock')
        };


        function bodyUnlock() {
            setTimeout(function () {
                body.style.paddingRight = '0px';
                headerContentJs.style.paddingRight = '0px';
                body.classList.remove('menu-lock');
            }, timeout)
        };
    }

    burger();

    function runningLane() {
        const body = document.querySelector('body');
        const speed = body.clientWidth <= 480 ? 30 : 10;


        $(function () {
            $('.product-line-marquee-js').marquee({
                duration: 25000,
                speed: speed,
                startVisible: true,
                duplicated: true,
                pauseOnHover: false,
                delayBeforeStart: 0,
                direction: 'left',
            });
        });

    }
    runningLane();

    function parquetTheInteriorSlider () {
        //cards slider
        const parquetTheInteriorSlider = new Swiper('.parquet-the-interior__slider', {
            // Optional parameters
            slidesPerView: 'auto',
            spaceBetween: 29,
            speed: 1000,
            autoplay: {
                delay: 2000,
            },
            loop: true,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 'auto',
                },
            }

        });
    }

    parquetTheInteriorSlider();

    function scrollAnimation() {
        const reveals = document.querySelectorAll(".element-animation");

        for (var i = 0; i < reveals.length; i++) {
            const windowHeight = window.innerHeight;
            const elementTop = reveals[i].getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("element-show");
            } else {
                reveals[i].classList.remove("element-show");
            }
        }
    }


    //scroll
    (function ($) {
        $(window).on('load', function () {
            $('.select__scroll').mCustomScrollbar({
                theme: "dark",
                axis: "x",
            });
        });
    })(jQuery);

    function tabs() {
        document.querySelectorAll('.tabs-items').forEach((element) => {
            const tabsItem = element.querySelectorAll('.tabs-item');
            const tabsBody = element.querySelectorAll('.tabs-body');


            for (let i = 0; i < tabsItem.length; i++) {
                if (tabsItem[i]) {
                    tabsItem[i].addEventListener('click', () => {
                        tabsItem.forEach((element) => {
                            element.classList.remove('active');
                        })

                        tabsItem[i].classList.add('active');

                        tabsBody.forEach((element) => {
                            element.classList.remove('open');
                        })

                        tabsBody[i].classList.add('open');
                    })
                }
            }






        })
    }

    tabs();

    function ElementActive () {
        document.querySelectorAll('.tabs-items').forEach((rod) => {
            const element = rod.querySelectorAll('.constructor-item-js');
            const img = rod.querySelector('.constructor-img-js');


            for (let i = 0; i < element.length; i++) {
                element[i].addEventListener('click', () => {
                    const getElement = element[i].querySelector('.constructor__item-img');

                    const getUrl = getElement.getAttribute('src');
                    const addImg = img.src = getUrl;
                    element.forEach((Element => Element.classList.remove('active')));
                    element[i].classList.add('active');
                })
            }
        });
    }

    ElementActive()



    window.addEventListener("scroll", scrollAnimation);
}


