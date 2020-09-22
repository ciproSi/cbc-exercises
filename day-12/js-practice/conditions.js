
const age = () => {

    const age = prompt('Enter age');


    // if(age >= 18) {
    //     alert('Access granted');
    // }
    // else {
    //     alert('Access denied');
    // }

    //jednodušší přepis    
    age >= 18 ? alert('Access granted') : alert('Access denied');
}

const triangle_Check = () => {
    const angle1 = Number(prompt('Enter firts angle'));
    const angle2 = Number(prompt('Enter sec angle'));
    const angle3 = Number(prompt('Enter third angle'));

    if (angle1 + angle2 + angle3 === 180) {
        alert('Yep, this could be triangle');
    }
    else {
        alert('Ups, not a triangle');
    }
}

const month_Number = () => {
    const month = prompt('Enter a month\'s number');
    if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) {
        document.write ('This month has 31 days.');
    } else if (month == 2) {
        document.write('This month has 28 days.');
    } else {
        document.write('This month has 30 days.');
    }
}


const leap_Year = () => {
    const year = prompt('Enter the year to check.');

    if (year % 400 == 0 || year % 100 != 0 && year % 4 == 0) {
        alert('This is a leap year!');
    } else {
        alert('This is NOT a leap year!');
    } 

}

const temperatures = () => {
    const temp1 = Number(prompt('Enter firts temp'));
    const temp2 = Number(prompt('Enter sec temp'));
    const temp3 = Number(prompt('Enter third temp'));

    if (temp1 > temp2 && temp1 > temp3) {
        alert('the highest value is ' + temp1);
    } else if (temp2 > temp3) {
        alert('the highest value is ' + temp2);
    } else {
        alert('the highest value is ' + temp3);
    }

}

const randomTime = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

const swim_Comp = () => {
    const comp1 = prompt('Enter firts name');
    const comp2 = prompt('Enter sec name');
    const comp3 = prompt('Enter third name');

    const comp1Time = randomTime(45,60);
    const comp2Time = randomTime(45,60);
    const comp3Time = randomTime(45,60);

    if (comp1Time < comp2Time) {
        if (comp2Time < comp3Time) {
            document.write('Winner is: ' + comp1 + '. Second is: ' + comp2 + '. Third is: ' + comp3);
        } else if (comp3Time > comp1Time) {
            document.write('Winner is: ' + comp1 + '. Second is: ' + comp3 + '. Third is: ' + comp2);
        } else {
            document.write('Winner is: ' + comp3 + '. Second is: ' + comp1 + '. Third is: ' + comp2);
        }
    } else if (comp2Time < comp3Time && comp3Time < comp1Time) {
        document.write('Winner is: ' + comp2 + '. Second is: ' + comp3 + '. Third is: ' + comp1);
    } else if (comp3Time < comp1Time) {
        document.write('Winner is: ' + comp3 + '. Second is: ' + comp2 + '. Third is: ' + comp1);
    } else {
        document.write('Winner is: ' + comp2 + '. Second is: ' + comp1 + '. Third is: ' + comp3);
    }

    console.log(comp1Time);
    console.log(comp2Time);
    console.log(comp3Time);

    
}


//way to pass the default value:
const defValue = (usrName = 'default value') => {
    console.log(usrName);
}


const spread = (a, b, c) => {
    // this is the way to find the highest number
    // Math.max(a,b,c);
    let spreadRes = 0;

    if (a < b && b < c) {
        spreadRes = c - a;
  
    } else if (a < c && c < b) {
        spreadRes = b - a;
  
    } else if (b < a && a < c) {
        spreadRes = c - b;
  
    } else if (c < a && a < b) {
        spreadRes = b - c;
  
    } else if (b < c && c < a) {
        spreadRes = a - b;
  
    } else if (c < b && b < a) {
        spreadRes = a - c;
    }
     
    console.log(spreadRes);
    
}


const fieldsAmount = () => {
    let numberOfFormFields = document.getElementById('biggie-form').length;
    document.getElementById('showPlace').innerHTML = numberOfFormFields + " fields in the form."
}

const showFormValues = () => {
    let formData = document.getElementById('biggie-form');
    const valueOfN1 = formData.elements[0].value;
    document.getElementById('showPlace').innerHTML = valueOfN1;
}

const theBiggie = () => {
    let a = document.getElementById('nr1').value;
    let b = document.getElementById('nr2').value;
    let c = document.getElementById('nr3').value;

    let biggie = 0;
    if (a > b) {
        if (a > c) {
            biggie = a;
        } else {
            biggie = c;
        }
    } else if (b > c) {
        biggie = b;
    } else {
        biggie = c;
    }
  document.getElementById('showPlace').innerHTML = biggie;  
}