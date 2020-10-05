'use strict';

//get the element to display
const departureTableElm = document.querySelector('.departure-table');

fetch('http://bootcamp.podlomar.org/api/departures')
    .then((resp) => resp.json())
    .then((departureData) => {
        departureData.forEach(departure => {
            const newTrain = new TrainDeparture(departure.time.hrs, departure.time.mins, departure.train, departure.no, departure.to, departure.status, departure.track);
            newTrain.mount(departureTableElm);
            
        });
    });
    

