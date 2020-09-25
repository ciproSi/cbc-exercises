'use strict';

// // preserves the message within the html, use .toggle
    // const padllockImg = document.querySelector('img');

    // const toggleVisible = () => {
    //     const message = document.getElementById('message');
    //     message.classList.toggle('hidden');
    // }

    // padllockImg.addEventListener('mouseenter', toggleVisible);
    // padllockImg.addEventListener('mouseleave', toggleVisible);


// // this way still preserves the message in HTML
    // const message = document.getElementById('message'),
    //       padllockImg = document.querySelector('img');
    
    // padllockImg.addEventListener('mouseenter', () => {
    //     message.style = "display:none";
    // });

    // padllockImg.addEventListener('mouseleave', () => {
    //     message.style = "display: block";
    // });

// // like with .toggle but with classList.add and classList.remove
    const message = document.getElementById('message'),
          padllockImg = document.querySelector('img');
    
    padllockImg.addEventListener('mouseenter', () => {
        message.classList.add('hidden');
    });

    padllockImg.addEventListener('mouseleave', () => {
        message.classList.remove('hidden');
    });


// //this way the message dissapears from html - bit better
    // const padllockImg = document.querySelector('img'),
    //       container = document.getElementById('hidden-message');

    // padllockImg.addEventListener('mouseenter', () => {
    //     const message = document.getElementById('message');
    //     message.parentNode.removeChild(message);
    // });

    // padllockImg.addEventListener('mouseleave', () => {
    //     const messageRe = document.createElement('p');
    //     messageRe.setAttribute('id', 'message');
    //     messageRe.textContent = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo exercitationem odio iure molestiae maxime sint voluptatum, earum laudantium nemo excepturi officiis esse harum. Unde totam fugit quo consequatur voluptas! Aperiam.";
    //     container.appendChild(messageRe);
    // });
