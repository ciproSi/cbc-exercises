
const how_Old = () => {
    let birthYear = prompt("What is your birth year?");
    let age = 2020 - Number(birthYear);
    console.log(age);
    document.getElementById('answer').innerHTML = "You are " + age + " years old.";
}


const speed_to_kmh = () => {
    let speedInMS = prompt("Insert speed in m/s");
    let speedInKmH = Number(speedInMS) * 3.6;
    document.getElementById('answer').innerHTML = "Rychlost " + speedInMS + " m/s = " + speedInKmH + " km/h";
}

const eur_to_czk = (exChangeRate) => {
    let amountInCZK = prompt('How many EUR you want to change?');
    let amountInEUR = Number(amountInCZK) * exChangeRate;
    document.getElementById('answer').innerHTML = Math.round(amountInEUR) + " CZK";
}

const number_of_sms = () => {
    let numberSMS = Math.ceil((Number(prompt('Insert your message.').length)) / 160);
    document.getElementById('answer').innerHTML = "This message will be divided into: " + numberSMS;
}

const fahrenheit_to_celsius = () => {
    let fahrenheit = prompt('Insert temperature in Fahrenheit:')
    let celsius = Math.round(((Number(fahrenheit) + 40) / 1.8) - 40);
    document.getElementById('answer').innerHTML = fahrenheit + " °F = " + celsius + " °C";
}


const dice_roll = () => {
    let random = Math.random();
    let dice = 0;
    if (random <= 0.16666666666) {
        dice = 1;
    } else if (0.1666666 < random < 0.1666666*2) {
        dice = 2;
    } else if (0.1666666*2 <= random < 0.1666666*3) {
        dice = 3;
    } else if (0.1666666*3 <= random < 0.1666666*4) {
        dice = 4;
    } else if (0.1666666*4 <= random < 0.1666666*5)
        dice = 5;
    else {
        dice = 6;
    }
    
    
    document.getElementById('answer').innerHTML = dice;
}


