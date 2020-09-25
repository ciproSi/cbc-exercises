'use strict';
console.log('It works!');

const clearBtn = document.getElementById('btn-clear'),
      plusBtn = document.getElementById('btn-plus'),
      equalsBtn = document.getElementById('btn-equals'),
      inputAmount = document.querySelector('.calc__input'),
      resultDisplay = document.querySelector('.calc__result');

//declaring 'op' variable which will holds the last operation performed
let op = 0,
    result = 0;

const plus = () => {
    result += Number(inputAmount.value);
    resultDisplay.textContent = result;
    op = "+";
}

plusBtn.addEventListener('click', plus);

// perform last operation on equal click
equalsBtn.addEventListener('click', () => {
    if (op === "+") {plus ()};

})

//clear all
clearBtn.addEventListener('click', () => {
    result = 0;
    inputAmount.value = 0;
    op = 0;
    resultDisplay.textContent = result;
})