'use strict';

//get the elements
const stopLight = document.querySelector('#stopLight'),
      walkLight = document.querySelector('#walkLight'),
      btn = document.querySelector('#desireToGo'),
      timerElm = document.getElementById('timer');

btn.addEventListener('click', () => {
    // disable button for until stop sign is on again
    btn.disabled = true;
   
    //get the random value from 2-5s for pedestrians waiting time
    const waitingTime = Math.floor(Math.random() * 3000) + 2000; 

    //get the times in seconds for counter
    let timer = Math.floor(waitingTime / 1000) + 1;
    
    timerElm.textContent = timer + " s";
    const timerID = setInterval(() => {
        timer -= 1;
        timerElm.textContent = timer + " s";
    }, 1000);

    //change light to walk-on after random waiting time + kill the waiting countdown
    setTimeout(() => {
        stopLight.setAttribute("src", "stop-off.svg");
        walkLight.setAttribute("src", "walk-on.svg");
        clearInterval(timerID);
        timerElm.innerHTML = "";
    }, waitingTime);

    setTimeout(() => {
        stopLight.setAttribute("src", "stop-on.svg");
        walkLight.setAttribute("src", "walk-off.svg");
        
        //enable the button again
        btn.disabled = false;
    }, waitingTime + 5000);
    
});




