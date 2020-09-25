'use strict';

let usrInput = Number(prompt('Insert arabic number.'));
let result = "";

if (usrInput === 900) {
    result = "CM";
    usrInput = 0;
}

const m = Math.floor(usrInput / 1000);
for (let i = 0; i < m; i++) { result += "M"; };


const d = Math.floor((usrInput % 1000) / 500);
for (let i = 0; i < d; i++) { result += "D"};

console.log(result, m, d);
