'use strict';

console.log('It works');

const btnMinusElm = document.getElementById('minus'),
      btnPlusElm = document.getElementById('plus'),
      counterElm = document.getElementById('counter'),
      knobElm = document.getElementById('knob');

let currentState = Number(counterElm.textContent);

const progressPlus = () => {
    if (currentState < 10) {    
        const newState = (currentState + 1) * 10;
        currentState++;
        knobElm.style.width = newState + "%";
        counterElm.textContent = newState / 10;
    };
};

const progressMinus = () => {
    if (currentState > 0) {
        const newState = (currentState - 1) * 10;
        currentState--;
        knobElm.style.width = newState + "%";
        counterElm.textContent = newState / 10;
    };
};

btnMinusElm.addEventListener('click', () => {
    progressMinus();
});

btnPlusElm.addEventListener('click', () => {
    progressPlus();
});
