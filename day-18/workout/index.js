'use strict';
let red = {currentState: 0};
let green = {currentState: 0};
let blue = {currentState: 0};

const changeColorOfBoard = () => {
    const mixBoardElm = document.querySelector('.mix-board');
    mixBoardElm.style.backgroundColor = `
        rgb(${red.currentState}, ${green.currentState}, ${blue.currentState})`;
};

 red = new ProgressBar(0, 255, 255, 0, 0, changeColorOfBoard);
 green = new ProgressBar(0, 255, 255, 255,0 , changeColorOfBoard);
 blue = new ProgressBar(0, 255, 255 ,0 , 255, changeColorOfBoard);

const containerElm = document.querySelector('.container');

red.mount(containerElm);
green.mount(containerElm);
blue.mount(containerElm);



