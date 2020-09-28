'use strict';

console.log('connected');

const names = ['michal', 'petr', 'tadeas', 'kilian'];
const temps = [10, 22.3, 35, 10.8, 14.5];

// for (let i = 0; i < names.length; i++) {
//     console.log(names[i]);
// };

//first parameter of forEach is value and second is the index in the array (you can use only one)
names.forEach((name, index) => console.log(name, index));




const shoppingList = [
    {
        name: "jabla",
        amount: "1kg"
    },
    {
        name: "pomeranče",
        amount: "1kg"
    },
    {
        name: "banány",
        amount: "3kg"
    },
    {
        name: "švestky",
        amount: "0,5kg"
    }
];

const shoppingListElm = document.querySelector('.shoppingList');

shoppingList.forEach((item) => {
    shoppingListElm.innerHTML += "<li>" + item.name + " " + item.amount + "</li>";
});

//easier syntax - string interpolation
shoppingList.forEach((item) => {
    shoppingListElm.innerHTML += `<li>${item.name} ${item.amount}</li>`;
});