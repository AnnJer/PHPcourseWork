

function decrementCalc(id, elem) {
    let numHost = $(elem).closest('div').find('#quantityNum');
    let value = parseInt(numHost.html());

    if (value > 1) {
        value = value - 1;
    } else {
        value = 1;
    }

    addToCart(id, value);
    numHost.html(value);
    return false;
}

function incrementCalc(id, elem) {
    let numHost = $(elem).closest('div').find('#quantityNum');
    let value = parseInt(numHost.html());

    if (value < 100) {
        value = value + 1;
    } else {
        value =100;
    }

    addToCart(id, value);
    numHost.html(value);
    return false;
}





$('.like-btn').on('click', function() {
    $(this).toggleClass('is-active');
});


let closeCart = $('#closeCart');
let cart = $('.shopping-cart');
let openBtn = $('#login-trigger');
let bgPlaceholder = $('.bgPlaceholder');

closeCart.click(function (e) {
    cart.toggleClass('hidden');
    bgPlaceholder.toggleClass('hidden');
});

openBtn.click(function (e) {
    cart.toggleClass('hidden');
    bgPlaceholder.toggleClass('hidden');

    loadProductsToCart();
});

function loadProductsToCart() {
    let id = Object.keys(getAllProductsInCart());

    $.ajax({
        url: HOST+'/api/products/byId',
        type: 'POST',
        data: {id: id},
        success: function(result) {

            if (!result) {
                cart.find('.productsHost').html('<h2 style="text-align: center">...</h2>');
                return;
            }

            result = JSON.parse(result);

            let html = '';

            for (let product of result) {
                html += getCartProduct(product);
            }

            html += getButton();

            cart.find('.productsHost').html(html);
        },

    });
}

function getButton() {
    let value = JSON.stringify(Object.values(getAllProductsInCart()));
    return `
        <form onsubmit="clearCart()" action="/kursovaya/makeOrder" class="submitOrder" method="post">
            <input type="text" placeholder="phone" name="phone" required>
            <input type="hidden" name="products" value='${value}'>
            <input type="submit" value=" Заказать ">
        </form>
    `;
}

function getCartProduct(product) {
    return `
        <div class="item">
            <div class="buttons">
                <span onclick="removeFromCart(${product['id']}); loadProductsToCart()" class="delete-btn"></span>
            </div>

            <div class="image">
                <img src="/kursovaya/images/${product['img']}" alt="" />
            </div>

            <div class="description">
                <span>${product['name']}</span>
            </div>

            <div class="quantity">
                <button onclick="incrementCalc(${product['id']}, this)" class="plus-btn" type="button" name="button">
                    <img src="/kursovaya/images/plus.svg" alt="" />
                </button>
                <div id="quantityNum">1</div>
                <button onclick="decrementCalc(${product['id']}, this)" class="minus-btn" type="button" name="button">
                    <img src="/kursovaya/images/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">$${product['price']}</div>
        </div>
    `;
}



function activateTab(elem) {
    elem = $(elem);
    let tabs = elem.parent().find('a');
    tabs.removeClass('active');
    let link = elem.find('a');
    link.addClass('active');
}


function getAllProductsInCart() {
    let products = localStorage.getItem('cart') || '{}';
    products = JSON.parse(products);

    return products;
}


function saveProductsInCart(products) {
    products = JSON.stringify(products);
    localStorage.setItem('cart', products);
}


function addToCart(productId, amount) {
    amount = amount || 1;
    console.log(productId);
    let products = getAllProductsInCart();
    console.log(products);
    products[productId] = {
            id: productId,
            amount: amount
        };


    saveProductsInCart(products);
}

function removeFromCart(id) {
    let products = getAllProductsInCart();

    delete products[id];

    saveProductsInCart(products);
}


function clearCart() {
    localStorage.removeItem('cart');
}



