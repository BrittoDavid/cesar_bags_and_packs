document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('product-form');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        let name = document.getElementById('product-name').value;
        let image = document.getElementById('product-image').value;
        let description = document.getElementById('product-description').value;
        let price = document.getElementById('product-price').value;
        
        let product = { name, image, description, price };
        let products = JSON.parse(localStorage.getItem('products')) || [];
        products.push(product);
        localStorage.setItem('products', JSON.stringify(products));
        
        showNotification('Producto agregado correctamente', 'success');
        form.reset();
    });

    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.innerText = message;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
});
