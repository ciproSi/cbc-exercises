'use strict';

const padllockImg = document.querySelector('img'),
      container = document.getElementById('hidden-message');


// this way still preserves the message in HTML
// padllockImg.addEventListener('mouseenter', () => {
//     message.style = "display:none";
// })

// padllockImg.addEventListener('mouseleave', () => {
//     message.style = "display: block";
// });


//this way the message dissapears from html - bit better
padllockImg.addEventListener('mouseenter', () => {
    const message = document.getElementById('message');
    message.parentNode.removeChild(message);
})

padllockImg.addEventListener('mouseleave', () => {
    const messageRe = document.createElement('p');
    messageRe.setAttribute('id', 'message');
    messageRe.textContent = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo exercitationem odio iure molestiae maxime sint voluptatum, earum laudantium nemo excepturi officiis esse harum. Unde totam fugit quo consequatur voluptas! Aperiam.";
    container.appendChild(messageRe);
})
