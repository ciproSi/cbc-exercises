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
        status: "delayed",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "delayed",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "delayed",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "delayed",
        track: 8,
    },
    {time: 517,
        train: "Shore Line East",
        no: 25,
        to: "Horní Planá",
        status: "delayed",
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
    departureTableElm.innerHTML += `
        <tr class="table-row">
            <td>${timeOfDeparture}</td>
            <td>${train.train}</td>
            <td>${train.no}</td>
            <td>${train.to}</td>
            <td>${train.status}</td>
            <td>${train.track}</td>
        </tr>
    `;
});
