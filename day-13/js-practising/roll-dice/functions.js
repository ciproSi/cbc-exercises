let diceState = 1;

const sideBySide = () => {
    if (diceState === 1) {
        document.querySelector('div').classList.add('two');
        diceState++;
        return;
    }
    if (diceState === 2) {
        document.querySelector('div').classList.add('three');
        diceState++;
        return;
    }
    if (diceState === 3) {
        document.querySelector('div').classList.add('four');
        diceState++;
        return;
    }
    if (diceState === 4) {
        document.querySelector('div').classList.add('five');
        diceState++;
        return;
    }
    if (diceState === 5) {
        document.querySelector('div').classList.add('six');
        diceState++;
        return;
    }
    if (diceState === 6) {
        document.querySelector('div').className = "dice-container";
        diceState = 1;
        return;
    }
}

const randomRoll = () => {
    const randomNum = Math.floor(Math.random() * 6) + 1;
    console.log(randomNum);


    if (randomNum === 1) {
        document.querySelector('div').className = 'dice-container';
        return;
    }
    if (randomNum === 2) {
        document.querySelector('div').className ='two';
        return;
    }
    if (randomNum === 3) {
        document.querySelector('div').className ='three';
        return;
    }
    if (randomNum === 4) {
        document.querySelector('div').className ='four';
        return;
    }
    if (randomNum === 5) {
        document.querySelector('div').className ='five';
        return;
    }
    if (randomNum === 6) {
        document.querySelector('div').className ='six';
        return;
    }
}