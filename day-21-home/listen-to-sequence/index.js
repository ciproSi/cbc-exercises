'use strict';


const cheat = 'iddqd';
let keySequence = [];
document.addEventListener('keydown', (e) => {
    keySequence.push(e.key);
    if (keySequence.length > 5) {
        keySequence.splice(0,1);
        
    };
    //array to regular string
    let sequence = "";    
    keySequence.forEach((key) => {
        sequence += key; 
    });

    //compare to cheat
    if (sequence === cheat) {
        console.log('cheater!');
    }
        


    console.log(sequence);
    console.log(keySequence);
});