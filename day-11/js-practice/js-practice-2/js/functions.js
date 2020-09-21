console.log('Correctly connected to HTML.');
let state = 0;




const set_headline = () => {
    // let h1 = document.getElementById('headline');
    // console.log(h1); //tohle vrátí celej ten řádek včetně elementu
    // console.log(h1.innerHTML); //tohle vrátí obsah elementu

    // //innerHTML můžu použít i pro zapsání
    // // h1.innerHTML = "JavaScript";
    
    //vše předchozí do jednoho řádku:
    
    
    if (state == 0) {
            document.getElementById('headline').innerHTML = "JavaScript";
            document.getElementById('headline').style.backgroundColor = "Red";
            state = 1;
    } else {
            h1 = document.getElementById('headline');
            h1.innerHTML = "I need to study. But what?"
            h1.style.backgroundColor = "blue";

            state = 0;
        }

}

const set_inner_code = (elementId, text) => {
    
    document.getElementById(elementId).innerHTML = text;
    
}