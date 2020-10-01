'use strict';


const bar = new ProgressBar(5, "yellow", 100);
const bar2 = new ProgressBar(8, "orange", 20);

const containerElm = document.querySelector('.container');

bar.mount(containerElm);
bar2.mount(containerElm);
