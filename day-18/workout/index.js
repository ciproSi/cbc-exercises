'use strict';


const bar = new ProgressBar(5, "yellow");
const bar2 = new ProgressBar(8, "orange");

const containerElm = document.querySelector('.container');

bar.mount(containerElm);
bar2.mount(containerElm);
