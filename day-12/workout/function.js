//my solution:


const seat_convert = () => {
    
    let seatNumber = Number(prompt('Insert seat number'));

    if (seatNumber <= 9) {
        let newNumbering = "A" + (seatNumber + 1);
        console.log(newNumbering);
    } else if (seatNumber > 9 && seatNumber <= 19) {
        let newNumbering = "B" + (seatNumber - 9);
        console.log(newNumbering);
    } else if (seatNumber >= 20 && seatNumber <= 29) {
        let newNumbering = "C" + (seatNumber - 19);
        console.log(newNumbering);
    } else if (seatNumber >= 30 && seatNumber <= 39) {
        let newNumbering = "D" + (seatNumber - 29);
        console.log(newNumbering);
    } else if (seatNumber >= 40 && seatNumber <= 49) {
        let newNumbering = "E" + (seatNumber - 39);
        console.log(newNumbering);
    } else if (seatNumber >= 50 && seatNumber <= 59) {
        let newNumbering = "F" + (seatNumber - 39);
        console.log(newNumbering);
    } else {
        alert('We don\'t have such seat.')
    }
}


//solution after some help
const seat_Convert_2 = () => {
    let seatNumber = Number(prompt('Insert seat number'));

    let rowLetter = String.fromCharCode(Math.floor(seatNumber/10) + 65);
    let seatID = rowLetter + (seatNumber % 10);
    console.log(seatID);

}