'use strict';

const containerElm = document.querySelector('.container');
conversation.forEach((message,index) => {
    setTimeout(() => {
        if (message.side === "local") {
            containerElm.innerHTML += `
                <div class="message message--right">
                <img src="${message.name.toLowerCase()}.png" alt="unicorn">
                <div class="message__self--right">${message.text}</div>
            `;
        };
        if (message.side === "remote") {
            containerElm.innerHTML += `
                <div class="message message--left">
                <img src="${message.name.toLowerCase()}.png" alt="cleverbot">
                <div class="message__self--left">${message.text}</div>
            `;
        };
    }, index * 800);
});    

    
    
