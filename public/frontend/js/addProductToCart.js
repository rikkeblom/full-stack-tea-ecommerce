const cartItemContainer = document.querySelector('.drawer_cart__cart_items');
const addToCartButton = document.querySelector('.kurvButton');

const svgTrash = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3.5 3.5L4.125 13.5C4.15469 14.0778 4.575 14.5 5.125 14.5H10.875C11.4272 14.5 11.8397 14.0778 11.875 13.5L12.5 3.5" stroke="#777777" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.5 3.5H13.5H2.5Z" fill="#777777"/><path d="M2.5 3.5H13.5" stroke="#777777" stroke-miterlimit="10" stroke-linecap="round"/><path d="M6 3.5V2.25C5.99971 2.15143 6.01891 2.05377 6.0565 1.96265C6.09409 1.87152 6.14932 1.78873 6.21903 1.71903C6.28873 1.64933 6.37152 1.59409 6.46265 1.55651C6.55377 1.51892 6.65143 1.49971 6.75 1.5H9.25C9.34857 1.49971 9.44623 1.51892 9.53735 1.55651C9.62848 1.59409 9.71127 1.64933 9.78097 1.71903C9.85068 1.78873 9.90591 1.87152 9.9435 1.96265C9.98109 2.05377 10.0003 2.15143 10 2.25V3.5M8 5.5V12.5M5.75 5.5L6 12.5M10.25 5.5L10 12.5" stroke="#777777" stroke-linecap="round" stroke-linejoin="round"/></svg>';

const productImage = 'https://5.imimg.com/data5/SELLER/Default/2020/10/LV/PB/AM/112068631/leaf-tea-500x500.jpg';

const labels = Array.from(document.querySelectorAll('label'));
const textFelt = Array.from(document.querySelectorAll(".textContainer"));

cartItemContainer.innerHTML = '';

labels.forEach(label => { 
    label.addEventListener("click", () => {

        textFelt.forEach(textFelt => { 
            let labelAttr = label.getAttribute("for");
            let textFeltAttr = textFelt.getAttribute("id");

            if ( labelAttr == textFeltAttr) {
                const productID = textFelt.getAttribute("data-id");
                const productName = textFelt.querySelector(".productTitel").innerText;
                const productPrice = textFelt.querySelector(".productPrice").innerText;
                const productWeight = textFelt.querySelector(".productWeight").innerText;
                const productAmount = document.getElementById("amount").innerText;
                
                //console.log(productID);
                //console.log(productName);
                //console.log(productPrice);
                //console.log(productWeight);
                //console.log(productAmount);

                addToCartButton.addEventListener('click', () => {
        
                    let newCartItem = document.createElement('div');
                    newCartItem.classList.add('cart_item');
                    newCartItem.dataset.variant_id = productID;
                    newCartItem.innerHTML = 
                        '<img class="cart_item__product_image" src="'+ productImage +'" alt="">' +
                        '<div class="cart_item__inner">' +
                            '<div class="cart_item__info">' +
                                '<div class="cart_item__names">' +
                                    '<p class="cart_item__product_name">'+ productName +'</p>' +
                                    '<p class="cart_item__variant_name">vægt: '+ productWeight +'</p>' +
                                '</div>' +
                                '<div class="cart_item__prices">' +
                                    '<p class="cart_item__price_total">'+ productPrice +'</p>' +
                                    '<p class="cart_item__price_per_item">' +
                                        '<span class="price_per_item__current_price">'+ productPrice +'<span>' +
                                        '<span class="price_per_item__original_price"><span>' +
                                    '</p>' +
                                '</div>' +
                            '</div>' +
                            '<div class="cart_item__quantity">' +
                                '<div class="input-group">' +
                                    '<input data-variant_id="'+ productID +'" data-variant_stock="10" type="button" value="-" class="button-minus" data-field="quantity">' +
                                    '<input data-variant_id="'+ productID +'" data-variant_stock="10" type="number" step="1" max="" value="'+ productAmount +'" name="quantity" class="quantity-field">' +
                                    '<input data-variant_id="'+ productID +'" data-variant_stock="10" type="button" value="+" class="button-plus" data-field="quantity">' +
                                '</div>' +
                                '<div data-variant_id="'+ productID +'" class="remove">'+ svgTrash +'</div>' +
                            '</div>' +
                        '</div>';
                        
                    //console.log(cartItemContainer);
                        
                    cartItemContainer.appendChild(newCartItem);

                    setupCart();
                });
            }
        });
    });
});

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
}

function removeQuantity(e){
    const product = document.querySelector(".cart_item[data-variant_id='" + e.target.dataset.variant_id + "']")
    if(product.querySelector("input[type=number]").value >= 2){
        product.querySelector("input[type=number]").value --;
    }else if (product.querySelector("input[type=number]").value <= 1){
        product.remove();
    }
}

function addQuantity(e){
    let product = document.querySelector(".cart_item[data-variant_id='" + e.target.dataset.variant_id + "']")
    let qty = product.querySelector("input[type=number]")
    let stock = parseInt(e.target.dataset.variant_stock);;
    if(qty.value < stock){
        qty.value ++;
    }else{
        console.log("some message should say that there is no more stock than what is already added")
    }
}

function removeFromCart(e){
    const product = document.querySelector(".cart_item[data-variant_id='" + e.target.dataset.variant_id + "']")
    product.remove();
}