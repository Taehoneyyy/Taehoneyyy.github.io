const adultPrice = 20; // price for adults
const childPrice = 10; // price for children
const seniorPrice = 15; // price for seniors

function calculateTotal() {
    const adults = parseInt(document.getElementById('adults').value);
    const children = parseInt(document.getElementById('children').value);
    const seniors = parseInt(document.getElementById('seniors').value);

    const total = (adults * adultPrice) + (children * childPrice) + (seniors * seniorPrice);

    document.getElementById('total').innerText = '총 가격: $' + total;
}
