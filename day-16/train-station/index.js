'use strict';

//time of departure is stored as a minutes before midnight
const departures = [
    {time: 494,
     train: "Acela Express",
     no: 2151,
     to: "Horní Planá",
     status: "on time",
     track: 14,
    },
    {time: 499,
        train: "New Heaven Line",
        no: 1542,
        to: "Černé Hory",
        status: "on time",
        track: 10,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "on time",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "on time",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "on time",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "on time",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "on time",
        track: 8,
    },
    {time: 494,
        train: "Acela Express",
        no: 2151,
        to: "Horní Planá",
        status: "on time",
        track: 14
    },
];

//get the elements to display
const departureTableElm = document.querySelector('.departure-table');

//display data to the table
let timeOfDeparture;
departures.forEach((train) => {
    
    //put 0 in front of minute if there is less then 10 minutes
    if (60 - train.time % 60 < 10) {
        timeOfDeparture = 23 - (Math.floor(train.time / 60)) + ":0" + (60 - train.time % 60);
    } else {
        timeOfDeparture = 23 - (Math.floor(train.time / 60)) + ":" + (60 - train.time % 60);
    };
    const tableRow = document.createElement('tr');
    tableRow.className = "table-row";
    tableRow.innerHTML = `
        <td>${timeOfDeparture}</td>
        <td>${train.train}</td>
        <td>${train.no}</td>
        <td>${train.to}</td>
        <td class="train-status">${train.status}</td>
        <td>${train.track}</td>
        <td><button class="btn-delayed">Delayed</button></td>
    `;

    const btnDelayedElm = tableRow.querySelector('.btn-delayed');
    
    btnDelayedElm.addEventListener('click', () => {
        const statusElm = tableRow.querySelector('.train-status');
        if (train.status === "on time") {
            statusElm.innerHTML = `<input type="text" class="delay-input">`;
            const delayInputElm = statusElm.querySelector('.delay-input');
            delayInputElm.focus();
            delayInputElm.addEventListener('keydown', (event) => {
                if (event.key === "Enter") {
                    const delayInput = delayInputElm.value;
                    train.status = delayInput;
                    statusElm.innerHTML = `Current delay: ${train.status} min.`;
                    btnDelayedElm.textContent = "No delay";
                    tableRow.classList.toggle('table-row--delayed');
                };
            });
        } else {
            train.status = "on time";
            statusElm.textContent = train.status;
            btnDelayedElm.textContent = "Delayed";
            tableRow.classList.toggle('table-row--delayed');
        };

    });

    departureTableElm.appendChild(tableRow);    
});

