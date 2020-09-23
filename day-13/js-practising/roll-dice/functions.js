// let diceState = 1;

// const sideBySide = () => {
//     if (diceState === 1) {
//         document.querySelector('div').classList.add('two');
//         diceState++;
//         return;
//     }
//     if (diceState === 2) {
//         document.querySelector('div').classList.add('three');
//         diceState++;
//         return;
//     }
//     if (diceState === 3) {
//         document.querySelector('div').classList.add('four');
//         diceState++;
//         return;
//     }
//     if (diceState === 4) {
//         document.querySelector('div').classList.add('five');
//         diceState++;
//         return;
//     }
//     if (diceState === 5) {
//         document.querySelector('div').classList.add('six');
//         diceState++;
//         return;
//     }
//     if (diceState === 6) {
//         document.querySelector('div').className = "dice-container";
//         diceState = 1;
//         return;
//     }
// }

// const randomRoll = () => {
//     const randomNum = Math.floor(Math.random() * 6) + 1;
//     console.log(randomNum);


//     if (randomNum === 1) {
//         document.querySelector('div').className = 'dice-container';
//         return;
//     }
//     if (randomNum === 2) {
//         document.querySelector('div').className ='two';
//         return;
//     }
//     if (randomNum === 3) {
//         document.querySelector('div').className ='three';
//         return;
//     }
//     if (randomNum === 4) {
//         document.querySelector('div').className ='four';
//         return;
//     }
//     if (randomNum === 5) {
//         document.querySelector('div').className ='five';
//         return;
//     }
//     if (randomNum === 6) {
//         document.querySelector('div').className ='six';
//         return;
//     }
// }

//more elegant solution where both fce effectively works together

let diceState = 1;
let betValue = 0;
let wallet = 100;

const sideBySide_2 = () => {
    let img = document.querySelector('img');
    if (diceState == 6) {diceState = 0};
    diceState++;
    img.setAttribute("src", "sides/side" + diceState + ".png");
}

const randomRoll_2 = () => {
    let walletContent = document.getElementById('wallet');
    let img = document.querySelector('img');
    const randomNum = Math.floor(Math.random() * 6) + 1;
    console.log(randomNum);
    img.setAttribute("src", "sides/side" + randomNum + ".png");
    diceState = randomNum;

    if (betValue !== 0 && betValue > 0) {
        if (wallet < betValue) {
            alert('You have not enough money to play...');
            return;
        }
        if (randomNum === 6) {
            wallet += betValue * 6;
        } else {
            wallet -= betValue;
        }
    }
    if (wallet === 0) {
        let container = document.getElementById('left-container');
        container.className = "dice";
        container.innerHTML = "<h1>#looser</h1>";
        return;

    }
    walletContent.innerHTML = "This is in your wallet money right now: " + wallet;
}

const placeBet = () => {
    if (wallet < 0) {
        alert('NO entry for losers with no money in the pocket!');
        return;
    }

    betValue = document.getElementById('betValue').value;

    //check if they have enough money to make such a bet
    if (wallet < betValue) {
        alert('You have not enough money to that bet...');
        return;
    }

    document.getElementById('betValueDisplay').innerHTML = "Your current bet is " + betValue;
    if (betValue < 0) {
        alert('Common... you can\'t bet with negative values!')
        document.getElementById('betValue').value = 0;
    }
}

const underOver7 = () => {
    //this function is working but needs some checkpoint like the previous one to be made
    
    //generate two random numbers independently for both dices, calculate the sum
    const randomNum1 = Math.floor(Math.random() * 6) + 1;
    const randomNum2 = Math.floor(Math.random() * 6) + 1;
    const score = randomNum2 + randomNum1;
    console.log (randomNum1, randomNum2, score);

    //get users bet amount and bet type
    const yourBet = Number(document.getElementById('yourBet').value);
    const betType = getRadioValue ('typeOfBet');
    console.log(betType);

    //get img elements of both dice
    const dice1 = document.getElementById('diceFace1');
    const dice2 = document.getElementById('diceFace2');
    

    //set faces to corresponding random numbers
    dice1.setAttribute("src", "sides/side" + randomNum1 + ".png");
    dice2.setAttribute("src", "sides/side" + randomNum2 + ".png");

    //compare sum of rolls with bettype and give/take money to/from user
    if ((betType == "U" && score < 7) || (betType == "O" && score > 7))  {
        wallet += yourBet;
    } else if (betType == "S" && score == 7) {
        wallet += yourBet * 3;
    } else {
        wallet -= yourBet;
    }

    //show the total score and current wallet content
    document.getElementById('score').innerHTML = "Total score: " + score;
    document.getElementById('walletAmount').innerHTML = "Your wallet: " + wallet;
}

//function to get value of checked radio input
const getRadioValue = (inputName) => {
    const radio = document.getElementsByName(inputName);
    for (let i = 0; i < radio.length; i++) {
        if (radio[i].checked) {
            return radio[i].value;
        } 
    }
}