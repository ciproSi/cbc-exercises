'use strict';

const starsAll = document.querySelectorAll('.rating__star');

starsAll.forEach((star, index) => {
    star.addEventListener('click', () => {
        
        starsAll.forEach((star) => {
            star.classList.remove('rating__star--on');
        });
        
        for (let i = 0; i <= index; i++) {
            starsAll[i].classList.add('rating__star--on');
        };

        const ratingValue = document.querySelector('.rating__value');
        ratingValue.textContent = index + 1;
    });
});


