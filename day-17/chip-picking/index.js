'use strict';

const gameContainerElm = document.querySelector('.game-container');

class Chip {
    constructor(x, y, value) {
        this.x = x;
        this.y = y;
        this.value = value;
    }
    render() {
        const newChipElm = document.createElement('div');
        newChipElm.classList.add(`chip`, `chip--${this.value}`);
        newChipElm.style.left = `${this.x}px`;
        newChipElm.style.top = `${this.y}px`;
        newChipElm.textContent = this.value;
        newChipElm.addEventListener('click', () => {
            
        });
        gameContainerElm.appendChild(newChipElm);        
    }
};

class Game {
    constructor() {
        this.score = 0;

    }

    addChip (x, y, value) {
        let chip = new Chip(x,y,value);
        chip.render();
    }
};

