'use strict';

const gameContainerElm = document.querySelector('.game-container');

class Chip {
    constructor() {
        this.x = Math.floor(Math.random() * 700);
        this.y = Math.floor(Math.random() * 570);
        this.value = Math.floor(Math.random() * 5) + 1;

    }
    render() {
        const newChipElm = document.createElement('div');
        newChipElm.classList.add(`chip`, `chip--${this.value}`);
        newChipElm.style.left = `${this.x}px`;
        newChipElm.style.top = `${this.y}px`;
        newChipElm.textContent = this.value;
        newChipElm.addEventListener('click', () => {
            gameContainerElm.removeChild(newChipElm);
            game.score += this.value;
            game.update();

        });
        gameContainerElm.appendChild(newChipElm);        
        
    }
};

class Game {
    constructor() {
        this.score = 0;
    }

    addChips(amount) {
        for (let i = 0; i < amount; i++) {
            new Chip().render();
        };
    }

    newGame() {
        const newScoreElm = document.createElement('h1');
        newScoreElm.classList.add('score');
        newScoreElm.textContent = `
            Score: ${this.score}
        `;
        gameContainerElm.appendChild(newScoreElm);
        this.addChips(10);
    }

    update() {
        const scoreElm = document.querySelector('.score');
        scoreElm.textContent = `
            Score: ${this.score}
        `;
    }

    resetGame () {
        gameContainerElm.innerHTML = '';
        this.score = 0;
        
    }
   
}

const game = new Game();
game.newGame();
