



const checkIDValidity = () => {
    const getID = document.getElementById('IDInput').value;
    const id = parseInt(getID,10);
    
    8657140305
    //get month and day and year
    const month = Math.floor(id / 1000000) % 100;
    const day = Math.floor(id / 10000) % 100;
    const year = Math.floor(id / 100000000);
    console.log(day, month, year);

    
    if (Number.isNaN(id)) {
        alert('Wrong format');
        return;
    }

    if (id.length !== 10) {
        alert('wring length');
        return;
    }

    //checkpoint - ID must be divisible by 11
    if (id % 11 !== 0) {
        alert('Not a valid ID - not divisible by 11');
        return;
    }
    
    //odečíst 50 u holek
    if (month >= 51 && month <=62) {
        month -= 50;
    }
    console.log(month, day);

    //check if the month is between 1-12
    if (month < 1 && month > 12) {
        alert('wrong month');
    }

    //check if the number of days is ok based on the month number
    if (month == 4 || month == 6 || month == 9 || month == 11) {
        if (day < 1 && day > 30) {
            alert('wrong day');
        }    
    } else if (month == 2) {
        if (year % 4 == 0) {
            if (day < 1 && day > 29) {
                alert('wrong day');
            } 
            if (day < 1 && day > 29) {
                alert('wrong day');
            }     
        }
    } else {
        if (day < 1 && day > 31) {
            alert('wrong day');
        }
    }

    





    alert('ok');

}