function setupCart(){
    if(document.querySelector(".open")){
        document.querySelector(".open").addEventListener("click", () =>{
            document.querySelector(".drawer_cart").classList.add("open");
        })
    }
    if(document.querySelector(".drawer_cart .close")){
        document.querySelector(".drawer_cart .close").addEventListener("click", () =>{
            document.querySelector(".drawer_cart").classList.remove("open");
        })
    }
    if(document.querySelector(".cart_item")){
        document.querySelectorAll(".cart_item").forEach(cartItem =>{
            cartItem.querySelector(".button-minus").addEventListener("click", removeQuantity)
            cartItem.querySelector(".button-plus").addEventListener("click", addQuantity)
            cartItem.querySelector(".remove").addEventListener("click", removeFromCart)
        })
    }

    if(document.querySelector(".trust")){
        document.querySelector(".trust").addEventListener("click", addToCart)
    }
    
    updateCartTotal();
}

setupCart();

function removeQuantity(e){
    const varID = e.target.dataset.cart_item_id;
    const product = document.querySelector(".cart_item[data-cart_item_id='" + varID + "']");
    let qty = product.querySelector("input[type=number]");

    if(qty.value >= 2){
        qty.value --;
        updateProductTotal(product, qty, varID);
    }else if (qty.value <= 1){
        product.remove();
    }

    updateSessionData('/opdater-item', varID, qty.value);
    updateCartTotal();
}

function updateProductTotal(product, qty, varID){
    // the specific product 
    const singlePrice = parseInt(product.querySelector(".cart_item[data-cart_item_id='" + varID + "'] .cart_item__price_per_item").innerText);
    const totalPrice = singlePrice * qty.value;
    document.querySelector(".cart_item[data-cart_item_id='" + varID + "'] .cart_item__price_total span").innerText = totalPrice;
}

function updateCartTotal(){
    let total = 0;
    document.querySelectorAll('.cart_item__price_total span').forEach(prodTotal => { 
        total = total + parseInt(prodTotal.innerText);
    })
    document.querySelector(".cart_footer__total span").innerText = total;
}


function addQuantity(e){
    const varID = e.target.dataset.cart_item_id;
    let product = document.querySelector(".cart_item[data-cart_item_id='" + varID + "']")
    let qty = product.querySelector("input[type=number]")
    let stock = parseInt(e.target.dataset.variant_stock);

    if(qty.value < stock){
        qty.value ++;
        updateProductTotal(product, qty, varID);
    }else{
        console.log("some message should say that there is no more stock than what is already added")
    }

    updateSessionData('/opdater-item', varID, qty.value);
    updateCartTotal()
}

function removeFromCart(e){
    const varID = e.target.dataset.cart_item_id;
    const product = document.querySelector(".cart_item[data-cart_item_id='" + e.target.dataset.cart_item_id + "']")
    product.remove();
    updateCartTotal();
    updateSessionData('/fjern-fra-kurv', varID, 0);
}

function updateSessionData(link, itemId, newQuantity) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    fetch(link, { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ itemId, newQuantity }),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        console.log('Session data updated successfully');
    })
    .catch(error => {
        console.error('Error updating session data:', error);
    });
}

function addToCart(){
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const produktNavn = "Test";
    const quantity = 1;
    const variantNavn = "500g";
    const variantLager = "25";
    const variantPris = "34";
    const variantType = "vægt";
    const varID = 1;

        fetch('/ATC', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            produktNavn,
            quantity,
            variantNavn,
            variantLager,
            variantPris,
            variantType,
            varID
        }),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // Parse the response
    })
    .then(data => {
        console.log('Response from /ATC:', data);
        // if (data && data.message === 'Session data updated successfully - product added') {
        //     fetch('/opdater-kurv')
        //         .then(response => response.text()) // Change response type to text
        //         .then(html => {
        //             const drawerCart = document.querySelector('.drawer_cart');
        //             drawerCart.innerHTML = html; // Assign HTML directly
        //             setupCart(); // Rebind event listeners if needed
        //             updateCartTotal(); // Update total after adding an item
        //         })
        //         .catch(error => {
        //             console.error('Error fetching cart:', error);
        //         });
        // } else {
        //     console.error('Error updating session data');
        // }
    })
    .catch(error => {
        console.error('Error updating session data:', error);
    });
}