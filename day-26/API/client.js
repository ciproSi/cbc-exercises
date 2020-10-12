'use strict';

const buttonElm = document.getElementById('load-movies'),
      displayElm = document.getElementById('movies');

buttonElm.addEventListener('click', () => {
    fetch('http://www.cbp-exercises.test/day-26/API/endpoint.php')
        .then((resp) => resp.json())
        .then((movies) => {
            movies.forEach(movie => {
                displayElm.innerHTML += `
                    <li>${movie}</li>
                `;
            });
        });
});
