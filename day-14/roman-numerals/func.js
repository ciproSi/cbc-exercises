'use strict';

let usrInput = Number(prompt('Insert arabic number.'));
let result = "";

if (usrInput >= 1000) {
    const m = Math.floor(usrInput / 1000);
    for (let i = 0; i < m; i++) { result += "M"; };
}

if (usrInput % 1000 >= 900) {
    result += "CM";
}
if (usrInput % 1000 < 900 && usrInput >= 500) {
    const d = Math.floor((usrInput % 1000) / 500);
    for (let i = 0; i < d; i++) { result += "D"};
    const dc =  Math.floor((usrInput % 1000 - 500) / 100);
    for (let i = 0; i < dc; i++) {result += "C"};
};

if (usrInput % 1000 >= 100 && usrInput % 1000 < 400) {
    const c = Math.floor((usrInput % 1000) / 100);
    for (let i = 0; i < c; i++) {result += "C"};
}

if (usrInput >= 400 && usrInput < 500) {result += "CD"};

if (usrInput % 100 >= 50 && usrInput % 100 < 90) {
    const l = Math.floor((usrInput % 100) / 50);
    for (let i = 0; i < l; i++) {result += "L"};
    const lx = Math.floor((usrInput % 100 - 50) / 10);
    for (let i = 0; i < lx; i++) {result += "X"};
};

if (usrInput % 100 >= 90) {
    result += "XC";
}

if (usrInput % 100 < 40 && usrInput % 100 >= 10) {
    const x = Math.floor((usrInput % 100) / 10);
    for (let i = 0; i < x; i++) {result += "X"};
};

if (usrInput % 100 >= 40 && usrInput < 50) {result += "XL"};


if (usrInput % 10 >= 5 && usrInput % 10 < 9) {
    const v = Math.floor((usrInput % 10) / 5);
    for (let i = 0; i < v; i++) {result += "V"};
    const vi = usrInput % 10 - 5;
    for (let i = 0; i < vi; i++) {result += "I"};
};

if (usrInput % 10 === 9) {result += "IX"};

if (usrInput % 10 < 4) {
    const ii = usrInput % 10;
    for (let i = 0; i < ii; i++) {result += "I"};
}

if (usrInput % 10 === 4) {result += "IV"};



console.log(result);
