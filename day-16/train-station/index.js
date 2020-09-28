'use strict';

const departures = [494, 499, 500, 517, 520, 523, 530, 556, 563, 576, 586, 613, 625, 175];

//get the element to display
const departuresElm = document.querySelector('.departures');

let timeOfDeparture;
departures.forEach((time) => {
    
    //put 0 in front of minute if there is less then 10 minutes
    if (60 - time % 60 < 10) {
        timeOfDeparture = 23 - (Math.floor(time / 60)) + ":0" + (60 - time % 60);
    } else {
        timeOfDeparture = 23 - (Math.floor(time / 60)) + ":" + (60 - time % 60);
    };
    departuresElm.innerHTML += `
        <li>${timeOfDeparture}</li>
    `;
});

