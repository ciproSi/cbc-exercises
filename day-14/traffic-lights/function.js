'use strict';

//get the elements
const stopLight = document.querySelector('#stopLight'),
      walkLight = document.querySelector('#walkLight'),
      btn = document.querySelector('#desireToGo');

btn.addEventListener('click', () => {
    setTimeout(() => {
        stopLight.setAttribute("src", "stop-off.svg");
        walkLight.setAttribute("src", "walk-on.svg");
    }, 1000);
});


