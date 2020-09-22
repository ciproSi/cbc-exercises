const changeHeader = () => {
    const headerText = document.getElementById('headerInput').value;
    document.getElementById('header').innerHTML = headerText;
}

const addToCart = () => {
    let btn = document.querySelector('button');
    let amountAdded = document.getElementById('pcs').value;
    
    if (amountAdded > 0) {
        if (amountAdded == 1) {
            btn.className = "in-cart";
            document.getElementById('pcs').style.display = "none";
            btn.innerHTML = "1 piece added to cart"
        } else {
            btn.className = "in-cart";
            document.getElementById('pcs').style.display = "none";
            btn.innerHTML = amountAdded + " pieces added to cart";
        } 
    } else {
        alert('You have to add at lease one piece...')
    }

}

const checkPass = () => {
    const password = document.getElementById('pass').value;
    const usrName = document.getElementById('usrname').value;

    if (password === "simon1986" && usrName === "cipros") {
        alert('You are in');
    } else {
        alert('FUCK YOU, you bloody fuckin mother fucker bitch!');
    }
}