

const calculate = () => {

    //get the elements
    let resultDisplay = document.getElementById('result'),
        input = document.getElementById('input');

    //calculate sum of their value
    resultDisplay.value = Number(resultDisplay.value) +  Number(input.value);

    //set the input field to 0 for next possible input
    input.value = 0;


}