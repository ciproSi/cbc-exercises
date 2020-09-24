'use strict';

const calculate = () => {

    //get the elements
    const resultDisplay = document.getElementById('result'),
          input = document.getElementById('input');

    //calculate sum of their value and display it
    resultDisplay.value = Number(resultDisplay.value) +  Number(input.value);

    //set the input field to 0 for next possible input
    input.value = 0;


}