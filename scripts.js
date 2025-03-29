let cart = [];
const cartCount = document.querySelector('.cart a');
const cartItemsContainer = document.querySelector('.cart-items');
const totalPrice = document.querySelector('.cart-section p');

document.querySelectorAll('.add-to-cart').forEach((button) => {
    button.addEventListener('click', (e) => {
        const bookTitle = e.target.parentElement.querySelector('h3').textContent;
        const bookPrice = parseFloat(e.target.parentElement.querySelector('p').textContent.replace('Price: $', ''));
        
        // Add to cart
        cart.push({ title: bookTitle, price: bookPrice });
        updateCart();
    });
});

function updateCart() {
    // Clear the cart display
    cartItemsContainer.innerHTML = '';
    
    // Add cart items to the UI
    let total = 0;
    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `<p>${item.title} - $${item.price}</p>`;
        cartItemsContainer.appendChild(cartItem);
        total += item.price;
    });

    // Update the total price
    totalPrice.textContent = `Total: $${total.toFixed(2)}`;

    // Update the cart count
    cartCount.textContent = `Cart (${cart.length})`;
}