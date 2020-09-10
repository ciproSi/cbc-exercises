let theButton = document.getElementById('theButton');
let theText = document.querySelectorAll('.the-text');    
theButton.onclick = function () { 
    for(let x of theText) {
        x.classList.toggle('colorized');
    }
}; 
