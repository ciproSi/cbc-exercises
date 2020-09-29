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
        //change the array according to current train status
        train.status === "on time" ? train.status = "delayed" : train.status = "on time";
        
        //get the element to display current train status and display it
        const status = tableRow.querySelector('.train-status');
        status.textContent = train.status;
        
        //change the bg according to current state of the train
        tableRow.classList.toggle('table-row--delayed');
        
    });
    departureTableElm.appendChild(tableRow);    
});

