document.addEventListener('DOMContentLoaded', function () {
  console.log("1");

    const burgerMenu = document.getElementById('burger-menu');
    const navigation = document.querySelector('.main-navigation');

    burgerMenu.addEventListener('click', function () {
        navigation.classList.toggle('active');
        burgerMenu.classList.toggle('open');
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const experienceBlocks = document.querySelector('.experience_blocks');
    const secondBlocks = document.querySelectorAll('.experience_blocks_block_second img');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                experienceBlocks.classList.add('show');
                secondBlocks.forEach((block) => {
                    block.classList.add('show');
                });
            }
        });
    }, {
        threshold: 0.5
    });

    if (experienceBlocks) {
        observer.observe(experienceBlocks);
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const journeyBlocks = document.querySelector('.journey_blocks');
    const secondBlocks = document.querySelectorAll('.journey_blocks_block_second img');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                journeyBlocks.classList.add('show');
                secondBlocks.forEach((block) => {
                    block.classList.add('show');
                });
            }
        });
    }, {
        threshold: 0.5
    });

    if (journeyBlocks) {
        observer.observe(journeyBlocks);
    }
});




document.addEventListener('DOMContentLoaded', function () {
    const paralaxSection = document.querySelector('.paralax');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    if (paralaxSection) {
        observer.observe(paralaxSection);
    }
});

jQuery(document).ready(function ($) {
    $('.reviews_slider').slick({
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3,
        infinite: true,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    centerPadding: '30px',
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '15px',
                },
            },
        ],
    });
});
