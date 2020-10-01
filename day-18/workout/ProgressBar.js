class ProgressBar {
    constructor(currentState, backgroundColor) {
        this.currentState = currentState;
        this.backgroundColor = backgroundColor;
    }
    
    increase() {
        if (this.currentState < 10) {
            this.currentState++;
        };
        this.update();            
    }
    
    decrease() {
        if (this.currentState > 0) {
            this.currentState--;
        };
        this.update();
    }

    render() {
        const element = document.createElement('div');
        element.className = 'progress-bar';
        element.innerHTML = `
            <div id="label" class="label">
                <span class="counter"></span>/<span id="maximum">10</span>
            </div>
            <div class="progress">
                <div class="btn-minus"></div>
                <div class="bar">
                <div class="knob"></div>
                </div>
                <div class="btn-plus"></div>
            </div>
        `;
        
        const btnElmPlus = element.querySelector('.btn-plus');
        btnElmPlus.addEventListener('click', () => this.increase());

        const btnElmMinus = element.querySelector('.btn-minus');
        btnElmMinus.addEventListener('click', () => this.decrease());
        console.log(element);
        return element;
    }
        
    mount(parent) {
        this.element = this.render();
        parent.appendChild(this.element);
        this.update();
    }
    
    update() {
        const counterElm = this.element.querySelector('.counter'),
              knobElm = this.element.querySelector('.knob');
        knobElm.style.width = `${this.currentState * 10}%`;
        counterElm.textContent = this.currentState;
        knobElm.style.backgroundColor = this.backgroundColor;
    }


}