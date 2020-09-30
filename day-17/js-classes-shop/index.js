'use strict';

class Product {
    constructor(name, price, quantity) {
        this.name = name;
        this.price = price;
        this.quantity = quantity;
    }

    sell() {
        if (this.quantity > 0) {this.quantity--};
    }

    store(amount) {
        this.quantity += Number(amount);
    }
};

const products = [
    new Product("Žehlička", 150, 10),
    new Product("Car", 150, 10),
    new Product("Oil", 150, 10),
    new Product("Bananas", 150, 10), 
    new Product("Wallet", 150, 10), 
    new Product("Monitor", 150, 10), 
    new Product("Earphones", 150, 10),

];

const displayTableElm = document.querySelector('.display-table');

products.forEach((product) => {
    const tableRowElm = document.createElement('tr');
    tableRowElm.innerHTML = `
    <td>${product.name}</td>
    <td class="product-quantity">${product.quantity} in stock</td>
    <td>${product.price} CZK</td>
    <td><button class="btn-sell">Sell</button></td>
    <td><input type="number" class="input-add"></td>
    <td><button class="btn-add">Add to stock</button></td>
    `;
    const btnSellElm = tableRowElm.querySelector('.btn-sell'),
          productQuantityElm = tableRowElm.querySelector('.product-quantity'),
          inputAddElm = tableRowElm.querySelector('.input-add'),
          btnAddElm = tableRowElm.querySelector('.btn-add');
    
    btnSellElm.addEventListener('click', () => {
        product.sell();
        productQuantityElm.textContent = `${product.quantity} in stock`;

    });
    
    btnAddElm.addEventListener('click', () => {
        product.store(inputAddElm.value);
        productQuantityElm.textContent = `${product.quantity} in stock`;
    });
    displayTableElm.appendChild(tableRowElm);
});