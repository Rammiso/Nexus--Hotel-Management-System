// Initialize AOS
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    offset: 100
});

// Cart functionality
let cart = [];
let cartTotal = 0;

// Smooth scroll to menu
function scrollToMenu() {
    document.getElementById('menu').scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
}

// Menu category filtering
document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const menuItems = document.querySelectorAll('.menu-item');

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter menu items
            menuItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Add to cart functionality
    const addToCartBtns = document.querySelectorAll('.add-to-cart');
    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const itemName = this.dataset.item;
            const itemPrice = parseFloat(this.dataset.price);
            
            addToCart(itemName, itemPrice);
            
            // Visual feedback
            this.style.transform = 'scale(1.2)';
            this.innerHTML = '<i class="fa-solid fa-check"></i>';
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
                this.innerHTML = '<i class="fa-solid fa-plus"></i>';
            }, 1000);
        });
    });
});

// Add item to cart
function addToCart(name, price) {
    const existingItem = cart.find(item => item.name === name);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            name: name,
            price: price,
            quantity: 1
        });
    }
    
    updateCartUI();
    showCartNotification(name);
}

// Update cart UI
function updateCartUI() {
    const cartItems = document.getElementById('cartItems');
    const cartCount = document.getElementById('cartCount');
    const cartTotalElement = document.getElementById('cartTotal');
    
    // Clear cart items
    cartItems.innerHTML = '';
    
    // Calculate total
    cartTotal = 0;
    let totalItems = 0;
    
    cart.forEach((item, index) => {
        cartTotal += item.price * item.quantity;
        totalItems += item.quantity;
        
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `
            <div class="cart-item-info">
                <h4>${item.name}</h4>
                <p>$${item.price} x ${item.quantity}</p>
            </div>
            <div class="cart-item-controls">
                <button onclick="updateQuantity(${index}, -1)">-</button>
                <span>${item.quantity}</span>
                <button onclick="updateQuantity(${index}, 1)">+</button>
                <button onclick="removeFromCart(${index})" class="remove-btn">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        `;
        cartItems.appendChild(cartItem);
    });
    
    // Update cart count and total
    cartCount.textContent = totalItems;
    cartTotalElement.textContent = cartTotal.toFixed(2);
    
    // Show/hide cart count
    cartCount.style.display = totalItems > 0 ? 'flex' : 'none';
}

// Update item quantity
function updateQuantity(index, change) {
    cart[index].quantity += change;
    
    if (cart[index].quantity <= 0) {
        cart.splice(index, 1);
    }
    
    updateCartUI();
}

// Remove item from cart
function removeFromCart(index) {
    cart.splice(index, 1);
    updateCartUI();
}

// Toggle cart sidebar
function toggleCart() {
    const cartSidebar = document.getElementById('cartSidebar');
    const overlay = document.getElementById('overlay');
    
    cartSidebar.classList.toggle('open');
    overlay.classList.toggle('active');
    
    // Prevent body scroll when cart is open
    if (cartSidebar.classList.contains('open')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = 'auto';
    }
}

// Show cart notification
function showCartNotification(itemName) {
    swal({
        title: 'Added to Cart!',
        text: `${itemName} has been added to your cart`,
        icon: 'success',
        timer: 2000,
        buttons: false
    });
}

// Checkout function
function checkout() {
    if (cart.length === 0) {
        swal({
            title: 'Cart is Empty',
            text: 'Please add items to your cart before checkout',
            icon: 'warning'
        });
        return;
    }
    
    // Create order summary
    let orderSummary = 'Order Summary:\n\n';
    cart.forEach(item => {
        orderSummary += `${item.name} x${item.quantity} - $${(item.price * item.quantity).toFixed(2)}\n`;
    });
    orderSummary += `\nTotal: $${cartTotal.toFixed(2)}`;
    
    swal({
        title: 'Confirm Order',
        text: orderSummary,
        icon: 'info',
        buttons: {
            cancel: 'Cancel',
            confirm: {
                text: 'Place Order',
                value: true,
                className: 'btn-success'
            }
        }
    }).then((confirmed) => {
        if (confirmed) {
            processOrder();
        }
    });
}

// Process order
function processOrder() {
    // Generate random order number
    const orderNumber = 'NX' + Math.random().toString(36).substr(2, 9).toUpperCase();
    
    // Simulate order processing
    swal({
        title: 'Processing Order...',
        text: 'Please wait while we process your order',
        icon: 'info',
        buttons: false,
        timer: 2000
    }).then(() => {
        // Clear cart
        cart = [];
        updateCartUI();
        toggleCart();
        
        // Show success message
        swal({
            title: 'Order Placed Successfully!',
            text: `Your order number is: ${orderNumber}\nEstimated delivery: 15-20 minutes`,
            icon: 'success',
            button: 'Track Order'
        }).then(() => {
            // Auto-fill tracking input
            document.getElementById('orderNumber').value = orderNumber;
            document.getElementById('track').scrollIntoView({ behavior: 'smooth' });
        });
    });
}

// Track order function
function trackOrder() {
    const orderNumber = document.getElementById('orderNumber').value.trim();
    const trackingResult = document.getElementById('trackingResult');
    
    if (!orderNumber) {
        swal({
            title: 'Enter Order Number',
            text: 'Please enter your order number to track',
            icon: 'warning'
        });
        return;
    }
    
    // Simulate tracking
    trackingResult.innerHTML = `
        <div class="tracking-info">
            <h3>Order Status: ${orderNumber}</h3>
            <div class="tracking-steps">
                <div class="step completed">
                    <i class="fa-solid fa-check-circle"></i>
                    <span>Order Confirmed</span>
                    <small>2 minutes ago</small>
                </div>
                <div class="step completed">
                    <i class="fa-solid fa-utensils"></i>
                    <span>Preparing</span>
                    <small>1 minute ago</small>
                </div>
                <div class="step active">
                    <i class="fa-solid fa-truck"></i>
                    <span>Out for Delivery</span>
                    <small>Now</small>
                </div>
                <div class="step">
                    <i class="fa-solid fa-home"></i>
                    <span>Delivered</span>
                    <small>Est. 10 minutes</small>
                </div>
            </div>
            <div class="delivery-info">
                <p><strong>Delivery Person:</strong> John Smith</p>
                <p><strong>Contact:</strong> +1 (555) 123-4567</p>
                <p><strong>Estimated Arrival:</strong> 10-15 minutes</p>
            </div>
        </div>
    `;
    
    trackingResult.style.display = 'block';
}

// Contact form submission
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    // Simulate form submission
    swal({
        title: 'Message Sent!',
        text: 'Thank you for your message. We will get back to you soon.',
        icon: 'success'
    });
    
    this.reset();
});

// Smooth scrolling for navigation links
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        
        if (targetSection) {
            const offsetTop = targetSection.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Add CSS for cart items and tracking
const additionalCSS = `
.cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    margin-bottom: 1rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.cart-item-info h4 {
    color: var(--text-primary);
    font-size: 1rem;
    margin-bottom: 0.25rem;
}

.cart-item-info p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.cart-item-controls {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.cart-item-controls button {
    width: 30px;
    height: 30px;
    border: none;
    border-radius: 6px;
    background: var(--neon-blue);
    color: white;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

.cart-item-controls button:hover {
    background: var(--neon-cyan);
    transform: scale(1.1);
}

.remove-btn {
    background: var(--neon-pink) !important;
}

.tracking-info {
    background: var(--glass-bg);
    border: var(--glass-border);
    border-radius: 16px;
    padding: 2rem;
    margin-top: 2rem;
}

.tracking-info h3 {
    color: var(--text-primary);
    margin-bottom: 2rem;
    text-align: center;
}

.tracking-steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    position: relative;
}

.tracking-steps::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    height: 2px;
    background: var(--glass-border);
    z-index: 1;
}

.step {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    position: relative;
    z-index: 2;
    background: var(--primary-bg);
    padding: 0 1rem;
}

.step i {
    font-size: 2rem;
    color: var(--text-muted);
    transition: color 0.3s ease;
}

.step.completed i {
    color: var(--neon-cyan);
}

.step.active i {
    color: var(--neon-blue);
    animation: pulse 2s infinite;
}

.step span {
    color: var(--text-secondary);
    font-weight: 600;
    font-size: 0.9rem;
}

.step small {
    color: var(--text-muted);
    font-size: 0.8rem;
}

.delivery-info {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    padding: 1.5rem;
    text-align: center;
}

.delivery-info p {
    color: var(--text-secondary);
    margin-bottom: 0.5rem;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@media (max-width: 768px) {
    .tracking-steps {
        flex-direction: column;
        gap: 1rem;
    }
    
    .tracking-steps::before {
        display: none;
    }
    
    .step {
        flex-direction: row;
        justify-content: flex-start;
        text-align: left;
    }
}
`;

// Inject additional CSS
const style = document.createElement('style');
style.textContent = additionalCSS;
document.head.appendChild(style);