class ProgressBar {
    constructor(currentState, range, rColor, gColor, bColor, onChange) {
        this.currentState = currentState;
        this.range = range;
        this.rColor = rColor;
        this.gColor = gColor;
        this.bColor = bColor;
        this.onChange = onChange;
    }
    
    increase() {
        if (this.currentState < this.range) {
            this.currentState++;
            // this.onChange();
        };
        this.update();

    }
    
    decrease() {
        if (this.currentState > 0) {
            this.currentState--;
            // this.onChange();
        };
        this.update();
    }

    render() {
        const element = document.createElement('div');
        element.className = 'progress-bar';
        element.innerHTML = `
            <div id="label" class="label">
                <span class="counter"></span>/<span class="maximum"></span>
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
        btnElmPlus.addEventListener('mousedown', () => {
            this.interval = setInterval(() => {
                this.increase(); 
            }, 50);
        });
        btnElmPlus.addEventListener('mouseup', () => clearInterval(this.interval));
        const btnElmMinus = element.querySelector('.btn-minus');
        btnElmMinus.addEventListener('mousedown', () => {
            this.interval = setInterval(() => {
                this.decrease();
            }, 50);
        });
        btnElmMinus.addEventListener('mouseup', () => clearInterval(this.interval));
        return element;
    }
        
    mount(parent) {
        this.element = this.render();
        parent.appendChild(this.element);
        this.update();
    }
    
    update() {
        const counterElm = this.element.querySelector('.counter'),
              knobElm = this.element.querySelector('.knob'),
              maxElm = this.element.querySelector('.maximum');
        knobElm.style.width = `${this.currentState * 100 / this.range}%`;
        counterElm.textContent = this.currentState;
        knobElm.style.backgroundColor = `
            rgb(${this.currentState / this.range * this.rColor},
                ${this.gColor},
                ${this.bColor})
        `;
        maxElm.textContent = this.range;
        this.onChange();
         
    }


}
