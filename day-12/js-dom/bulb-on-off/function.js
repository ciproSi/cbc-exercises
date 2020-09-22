
//following code does the work
// const changeState = () => {
//     let bulb = document.getElementById('bulb').className;
//     if (bulb == "off") {
//         document.getElementById('bulb').className = "on";

//     } else {
//         document.getElementById('bulb').className = "off";
//     }
// }

// following code doesn't 

// const changeState = () => {
//     let bulb = document.getElementById('bulb').className;

//     if (bulb == "off") {
//         bulb.className = "on";

//     } else {
//         bulb.className = "off";
//     }
// }


// this is the easies solution
const changeState = () => {
    const element = document.getElementById('bulb');
    
    // toggle přidá třídu a když tam je tak ji naopak vymaže (když není a přidá ji, tak vrací true, když je a mže ji, tak vrací false)
    let x = element.classList.toggle('on');
    console.log(x)
}


