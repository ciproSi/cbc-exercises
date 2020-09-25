'use strict';




setTimeout(() => {
    const spinner = document.querySelector('.spinner'),
          image = document.querySelector('.image--hidden');
    spinner.classList.add('spinner--hidden');
    image.classList.remove('image--hidden');
}, 2000);