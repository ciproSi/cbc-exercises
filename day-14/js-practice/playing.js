// setInterval is higher order function
// it expects to receive  funciton as a first argument and we can define that function inside as an anonymous

// if you want to cancel the interval the you need to first assign it a id, see above, and then canel, see below (when you call the function stop it stop the timer with the assigned ID)


let counter = 0;
let counterState = 0;
let timerID = 0;
const timerElm = document.querySelector('#time');
const stopBtn = document.querySelector('#stop');

const timer = () => {
    timerID = setInterval(() => {
    counter += 1;
    timerElm.textContent = "Time: " + counter;
}, 500);
}

const startTimer = () => {
    timer ();
    counterState = 1;
    stopBtn.textContent = "Stop";
}

const stopTimer = () => {
    clearInterval(timerID);
    counterState = 0;
    timerElm.textContent = "Timer stopped at: " + counter;
    stopBtn.textContent = "Start";
}

stopBtn.addEventListener('click', () => {
    if (counterState === 0) {
        startTimer ();
    } else {
        stopTimer ();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.code === "Space" && counterState === 0) {
        startTimer();
    } else if (event.code === "Space") {
        stopTimer();
    }
});


//funkci, kterou ten event zavola se predava object (obsah viz console), ktery toho obsahuje hafec a muzeme ho pojmenovat, jak chceme...