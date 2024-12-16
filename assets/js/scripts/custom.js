document.addEventListener('DOMContentLoaded', function () {
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
