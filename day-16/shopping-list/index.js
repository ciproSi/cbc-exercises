'use strict';

let shoppingList = [
    {name: "banány",
     amount: "2 kg",
    },
    {name: "banány",
     amount: "23 kg",
    },
    {name: "banány",
     amount: "2 kg",
    },
    {name: "banány",
     amount: "2 kg",
    },
    {name: "banány",
     amount: "2 kg",
    },
];



const shoppingListElm = document.querySelector('.shopping-list-container');

const showShoppingList = () => {
    shoppingList.forEach((item, index) => {
        shoppingListElm.innerHTML += `
            <div class="item">
                <div class="item__name">${item.name}</div>
                <div class="item__amount">${item.amount}</div>
                <img class="item__btn" src="menu-close.png" alt="remove item icon" id="${index}">
            </div>
        `;
    });
    
    //removing from the list - needs to be inside function as the listeners needs to be changed dynamically when list is changed
    let deleteBtnElms = document.querySelectorAll('.item__btn');
    deleteBtnElms.forEach((elm) => {
        elm.addEventListener('click', () => {
            shoppingList.splice(elm.id, 1);
            shoppingListElm.innerHTML = "";
            showShoppingList();
    
        });
    });
};

//call showShoppingList fnc when page is loaded to show pre-set shopping list
showShoppingList();

//adding to the list
    //the item is add to the shoppingList arr which is displayed again afterwards
const addBtnElm = document.querySelector('.add-row__button'),
      inputItemName = document.querySelector('#input-item'),
      inputItemAmount = document.querySelector('#input-amount');

addBtnElm.addEventListener('click', () => {
    shoppingList.push({name: inputItemName.value, amount: inputItemAmount.value});
    //shopping list element needs to be cleaned before showin again to prevent multiple displaying of same data
    shoppingListElm.innerHTML = "";
    showShoppingList();

});






