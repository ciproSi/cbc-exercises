'use strict';

const containerElm = document.querySelector('.container');
conversation.forEach((message,index) => {
    setTimeout(() => {
            const msg = document.createElement('div');
            msg.className = `message message--${message.side}`;
            msg.innerHTML = `
                <img src="${message.name.toLowerCase()}.png" alt="">
                <div class="message__self--${message.side}">${message.text}</div>
                <button class="btn-like"></button>
            `;
            const likeBtnElm = msg.querySelector('.btn-like');
            let likesAmount = 0;
            likeBtnElm.addEventListener('click', () => {
                likeBtnElm.innerHTML = ++likesAmount; 
            });
            containerElm.appendChild(msg);
    }, index * 800);
});    



    
    
