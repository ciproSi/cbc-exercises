'use strict';

console.log('It works');

let currentState = 2;

const update = () => {
    const counterElm = document.getElementById('counter'),
          knobElm = document.getElementById('knob');
    knobElm.style.width = `${currentState * 10}%`;
    counterElm.textContent = currentState;
};

document.getElementById('minus').addEventListener('click', () => {
    if (currentState > 0) {
        currentState--;
    };
    update();
});

document.getElementById('plus').addEventListener('click', () => {
    if (currentState < 10) {    
        currentState++;
    };
    update();
});

update();