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


// perform
equalsBtn.addEventListener('click', () => {
    if (op === "+") {plus ()};

})
