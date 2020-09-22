let account = {
    "000256784" : 790,
    "000986056" : 5600,
    "001546238" : 78065,
    "030987456" : 120910,
    "šimon": 1000000
}

// const x = account;
// console.log(x);


// const accInsert = prompt('Insert your bank account number');

// if (account.hasOwnProperty(accInsert)) {

//     const action = prompt('Do you want to wishdraw (W) or see balance (B)?');

//     if (action === "B") {
//         alert('Balance on your account is: ' + account[accInsert]);
//     } else if (action === "W") {
//         const withdrawAmount = prompt('How much?');
//         if (withdrawAmount > account[accInsert]) {
//             alert('Not enough money on the account! Work more and don\'t eat at the KFC');
//         } else {
//             let newBalance = account[accInsert] - withdrawAmount;
//             alert('Your new balance is: ' + newBalance);
//         }
//     } else {
//         alert('Invalid entry. Refresh.')
//     }
// } else {
//     alert('No such account exists.')
// }


const balance = () => {
    const accInsert = document.getElementById('accNr').value;
    if (account.hasOwnProperty(accInsert)) {
        document.getElementById('showRes').textContent = "Your balance is: " + account[accInsert] + " EUR.";
    } else {
        alert('No such account exists!');
    }
}


const withdraw = () => {
    const accInsert = document.getElementById('accNr').value;
    if (account.hasOwnProperty(accInsert)) {
        const withdrawAmount = prompt('How much do you want to withdraw?');
        if (withdrawAmount <= account[accInsert]) {
            account[accInsert] -= withdrawAmount;
            document.getElementById('showRes').textContent = "Your new balance after withdraw is: " + account[accInsert] + " EUR.";
        } else {
            alert('Not enough money on the account! Work more and don\'t eat at the KFC');
        }
    } else {
        alert('No such account exists!');
    }
}

const displayAccount = () => {
    document.getElementById('showRes').textContent = Object.keys(account);
}