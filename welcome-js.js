
document.querySelector('form').addEventListener('submit', function (event) {
    const discountInput = document.querySelector('input[name="discount_code"]').value;
    if (discountInput === '') {
        alert('Please enter a discount code.');
        event.preventDefault();
    }
});