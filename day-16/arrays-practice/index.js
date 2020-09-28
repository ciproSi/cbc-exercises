'use strict';

const numbers = [220, 1, 2, 3, 4, 5, 30, 6, 18, 8, -24, 28, -17, 14, -10, 24, 12, -31, 19, 32, 185, -14, -10, 13, 15, 8, -15, -2, 17];

// console.log(numbers[Math.floor(numbers.length / 2)]);

//each number in array
// numbers.forEach(number => console.log(number));

//square of each number
// numbers.forEach(number => console.log(number*number));

//only negative values in array
// numbers.forEach((number) => {
//     if (number < 0) {console.log(number)};
// });

//absolute value if every number
// numbers.forEach(number => console.log(Math.abs(number)));

//find index of value -10
// numbers.forEach((number, index) => {
//     if (number === -10) {console.log(index)};
// });

//Output only even numbers from the array
// numbers.forEach((number) => {
//     if (number % 2 === 0) {console.log(number)};
// });

//Count how many negative numbers are there in the array.
let i = 0;
numbers.forEach((number) => {
    if (number < 0) {i++};
});
console.log(i);

//Compute the sum of all the numbers in the array.
let sum = 0;
numbers.forEach(number => sum += number);
console.log('sum of all numbers: ' + sum);

//Compute the average of the numbers in the array
// let sumForAvg = 0;
// numbers.forEach(number => sumForAvg += number);
// console.log('avg of all numbers: ' + sumForAvg / numbers.length);

//Compute the sum of all the positive numbers in the array.
let sumForPos = 0;
numbers.forEach((number) => {
    if (number > 0) {sumForPos += number};
});
console.log('sum of all positive numbers: ' + sumForPos);

//Output all the numbers which are greater than their predecessor in the array.
// numbers.forEach((number, index) => {
//     if (number > numbers[index - 1]) {console.log(number)};
// })

//Output all the peaks in the array. A peak is a number whose predecessor and successor are both smaller than the number itself.
numbers.forEach((number, index) => {
    if (number > numbers[index - 1] && number > numbers[index + 1]) {console.log('peak: ' + number)};
});

//First, compute the average number in the array and save the result in a variable. Then compute the sum of squared differences from the average.
let sumForAvg = 0;
numbers.forEach(number => sumForAvg += number);
const avg = sumForAvg / numbers.length;

let sumOfSqDif = 0;
numbers.forEach((number, index) => {
    sumOfSqDif += (number - avg) ** 2;
})
console.log('sum of squered differences: ' + sumOfSqDif);

// Compute the variance of the array. Variance is the average of squared differences from the average
console.log('variance: ' + sumOfSqDif / numbers.length);

//Find the biggest element in the array
// let max = numbers[0];
// numbers.forEach((number) => {
//     if (number > max) {max = number};
// });
// console.log('max number is:' + max);

//Find the biggest element which is less then 16

let maxLess16;
numbers.forEach (number => {
    if (number < 16) {maxLess16 = number};
});
console.log(maxLess16);

numbers.forEach((number, index) => {
    if (number < 16 && number > maxLess16) {
        maxLess16 = number;
    };
});
console.log(maxLess16);

//From the original array create a new array with a reversed order of the elements.
let reversedOrderArray = [];
numbers.forEach((number) => {
    reversedOrderArray.unshift(number);
});
console.log(reversedOrderArray);

//Find the length of the longest ascending sequence of consecutive numbers in the array.
let longestAscSeq = [];
let maxLengthAr = [];
longestAscSeq.push(numbers[0]);
numbers.forEach((number, index) => {
    if (number > numbers[index - 1]) {
        longestAscSeq.push(number);
        maxLengthAr.push(longestAscSeq.length);
    } else {
        longestAscSeq = [number];
    };
});

    //find the maximum value in maxLengthAr array  which is the final result
let maxLength = 1;
maxLengthAr.forEach((number) => {
    if (number > maxLength) {maxLength = number};
});
console.log('longest sequence of acending values is: ' + maxLength);



//Find the second biggest element in the array.

    //first step - find the biggest value in array
let max = numbers[0];
numbers.forEach((number) => {
    if (number > max) {max = number};
});
    //second step - loop again trhough the array and compare
let secondMax = 0;
let currentSecondMax = 0;
numbers.forEach((number) => {
    if (number < max) {
        currentSecondMax = number;
    }
    if (currentSecondMax >= secondMax) {
        secondMax = currentSecondMax;
    };
});
console.log('second max number is:' + secondMax);

