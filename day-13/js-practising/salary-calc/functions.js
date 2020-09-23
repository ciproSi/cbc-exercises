const monthSalary = () => {
    const grossPerHour = document.getElementById('grossPerHour').value;
    const hoursPerDay = document.getElementById('hoursPerDay').value;
    const daysInMonth = document.getElementById('daysInMonth').value;
    const tax = document.getElementById('tax').value;

    const netMonthSalary = grossPerHour * hoursPerDay * daysInMonth * (1 - tax/100);

    document.getElementById('result').innerHTML = netMonthSalary + "CZK";
}