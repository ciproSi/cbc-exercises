const monthSalary = () => {
    const grossPerHour = Number(document.getElementById('grossPerHour').value);
    const hoursPerDay = Number(document.getElementById('hoursPerDay').value);
    const daysInMonth = Number(document.getElementById('daysInMonth').value);
    const tax = Number(document.getElementById('tax').value);

    // check id the user entered numbers
    if (Number.isNaN(grossPerHour) || Number.isNaN(hoursPerDay) || Number.isNaN(daysInMonth) || Number.isNaN(tax)) {
        alert('insert number');
        return;
    }

    //calculate and echo to #result element
    const netMonthSalary = grossPerHour * hoursPerDay * daysInMonth * (1 - tax/100);
    document.getElementById('result').innerHTML = netMonthSalary + "CZK";
}