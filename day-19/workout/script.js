'use strict';

class Rating {
    constructor(ratingValue) {
        this.ratingValue = ratingValue;
    }

    render () {
        let element = document.createElement('div');
        element.className = 'rating';
        element.innerHTML = `
            <div class="rating__value"></div>
            <div class="rating__stars">
                <div class="rating__star rating__star--on"></div>
                <div class="rating__star rating__star--on"></div>
                <div class="rating__star rating__star--on"></div>
                <div class="rating__star"></div>
                <div class="rating__star"></div>
            </div>
        `;
        const starsAll = element.querySelectorAll('.rating__star');
        starsAll.forEach((star, index) => {
            star.addEventListener('click', () => {
                this.update(index);
            });
        });
        return element;
    }

    mount(parent) {
        this.element = this.render();
        parent.appendChild(this.element);
        this.update(this.ratingValue - 1);
    }

    update(index) {
        console.log(index);
        const starsAll = this.element.querySelectorAll('.rating__star');
        starsAll.forEach((star) => {
            star.classList.remove('rating__star--on');
        });
        
        for (let i = 0; i <= index; i++) {
            starsAll[i].classList.add('rating__star--on');
        };

        const ratingValue = this.element.querySelector('.rating__value');
        ratingValue.textContent = index + 1;
    }
}




const testElm = document.querySelector('.test');
let rating1 = new Rating(5);
let rating2 = new Rating(3);
rating1.mount(testElm);
rating2.mount(testElm);
