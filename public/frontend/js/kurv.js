function setupCart(){
    document.querySelector(".open").addEventListener("click", () =>{
        document.querySelector(".drawer_cart").classList.add("open");
    })
    document.querySelector(".drawer_cart .close").addEventListener("click", () =>{
        document.querySelector(".drawer_cart").classList.remove("open");
    })
    document.querySelectorAll(".cart_item").forEach(cartItem =>{
        cartItem.querySelector(".button-minus").addEventListener("click", removeQuantity)
    })
    document.querySelectorAll(".cart_item").forEach(cartItem =>{
        cartItem.querySelector(".button-plus").addEventListener("click", addQuantity)
    })
    document.querySelectorAll(".cart_item").forEach(cartItem =>{
        cartItem.querySelector(".remove").addEventListener("click", removeFromCart)
    })
    updateCartTotal();
}

setupCart();

function removeQuantity(e){
    const varID = e.target.dataset.variant_id;
    const product = document.querySelector(".cart_item[data-variant_id='" + varID + "']");
    let qty = product.querySelector("input[type=number]");

    if(qty.value >= 2){
        qty.value --;
        updateProductTotal(product, qty, varID);
        updateCartTotal();
    }else if (qty.value <= 1){
        product.remove();
    }
}

function updateProductTotal(product, qty, varID){
    // the specific product 
    const singlePrice = parseInt(product.querySelector(".cart_item[data-variant_id='" + varID + "'] .cart_item__price_per_item").innerText);
    const totalPrice = singlePrice * qty.value;
    document.querySelector(".cart_item[data-variant_id='" + varID + "'] .cart_item__price_total span").innerText = totalPrice;
}

function updateCartTotal(){
    let total = 0;
    document.querySelectorAll('.cart_item__price_total span').forEach(prodTotal => { 
        console.log(prodTotal)
        total = total + parseInt(prodTotal.innerText);
    })
    document.querySelector(".cart_footer__total span").innerText = total;
}


function addQuantity(e){
    const varID = e.target.dataset.variant_id;
    let product = document.querySelector(".cart_item[data-variant_id='" + varID + "']")
    let qty = product.querySelector("input[type=number]")
    let stock = parseInt(e.target.dataset.variant_stock);

    if(qty.value < stock){
        qty.value ++;
        updateProductTotal(product, qty, varID);
        updateCartTotal()
    }else{
        console.log("some message should say that there is no more stock than what is already added")
    }
}

function removeFromCart(e){
    const product = document.querySelector(".cart_item[data-variant_id='" + e.target.dataset.variant_id + "']")
    product.remove();
}
