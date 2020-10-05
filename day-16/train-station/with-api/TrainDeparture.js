'use strict';

class TrainDeparture {
    constructor(timeHrs, timeMins, trainName, trainNr, to, status, track) {
        this.timeHrs = timeHrs;
        this.timeMins = timeMins;
        this.trainName = trainName;
        this.trainNr = trainNr;
        this.to = to;
        this.status = status;
        this.track = track;
    }

    render() {
        //check if the status of the train has a value otherwise set the value to On Time
        if (this.status == "") { this.status = "On Time"};
        
        const departureRowElm = document.createElement('tr');
        departureRowElm.classList.add('table-row');
        departureRowElm.innerHTML = `
            <td>${this.timeHrs}:${this.timeMins}</td>
            <td>${this.trainName}</td>
            <td>${this.trainNr}</td>
            <td>${this.to}</td>
            <td class="train-status">${this.status}</td>
            <td>${this.track}</td>
            <td><button class="btn-delayed">Delayed</button></td>
        `;
        const btnDelayedElm = departureRowElm.querySelector('.btn-delayed');
        btnDelayedElm.addEventListener('click', () => {
            const statusElm = departureRowElm.querySelector('.train-status');
            if (this.status === "On Time") {
                statusElm.innerHTML = `<input type="text" class="delay-input">`;
                const delayInputElm = statusElm.querySelector('.delay-input');
                delayInputElm.focus();
                
                //to set the delay by pressing enter
                delayInputElm.addEventListener('keydown', (event) => {
                    if (event.key === "Enter") {
                        this.status = delayInputElm.value;
                        statusElm.innerHTML = `Current delay: ${this.status} min.`;
                        btnDelayedElm.textContent = "No delay";
                        departureRowElm.classList.toggle('table-row--delayed');
                    };
                });
            } else {
                this.status = "On Time";
                statusElm.textContent = this.status;
                btnDelayedElm.textContent = "Delayed";
                departureRowElm.classList.toggle('table-row--delayed');
            };
    
        });
        return departureRowElm;
    }

    mount(parent) {
        this.element = this.render();
        parent.appendChild(this.element);
    }

}