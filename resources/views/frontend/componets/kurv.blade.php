use Illuminate\Support\Facades\Session;
<?php $cart = Session::get('cart'); ?>

<div class="drawer_cart">
    <div class="close">@include('frontend.componets.svger.kryds')</div>
    <form action="" id="drawer_cart__form" class="" method="post">
        <div class="drawer_cart__inner">
            <div class="drawer_cart___header">            
                <h2>Din kurv</h2>
                <div class="drawer_cart___cart_items_header">
                    <span>Produkt</span>
                    <span>Total</span>
                </div>
            </div>

            <div class="drawer_cart__cart_items">
                @if($cart && is_array($cart))
                    @foreach($cart as $item)
                        <div class="cart_item" data-variant_id="1">
                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/LV/PB/AM/112068631/leaf-tea-500x500.jpg" alt="">
                            <div class="cart_item__inner">
                                <div class="cart_item__info">
                                    <div class="cart_item__names">
                                        <p class="cart_item__product_name">{{ isset($item['produktNavn']) ? $item['produktNavn'] : 'N/A' }}</p>
                                        <p class="cart_item__variant_name">{{$item['variant']['variantType']}}: {{$item['variant']['variantNavn']}}</p>
                                    </div>
                                    <div class="cart_item__prices">
                                        <p class="cart_item__price_total"><span>{{$item['variant']['variantPris']}}</span> kr</p>
                                        <p class="cart_item__price_per_item"><span class="price_per_item__current_price">{{$item['variant']['variantPris']}} kr<span><span class="price_per_item__original_price"><span></p>
                                    </div>
                                </div>
                                <div class="cart_item__quantity">
                                    <div class="input-group">
                                        <input data-variant_id="1" data-variant_stock="{{$item['quantity']}}" type="button" value="-" class="button-minus" data-field="quantity">
                                        <input data-variant_id="1" data-variant_stock="{{$item['quantity']}}" type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                        <input data-variant_id="1" data-variant_stock="{{$item['quantity']}}" type="button" value="+" class="button-plus" data-field="quantity">
                                    </div>
                                    <div data-variant_id="1" class="remove">@include('frontend.componets.svger.trash')</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            
            <div class="cart_footer">
                <div class="cart_footer__details">
                    <div class="cart_footer__total"><p>Subtotal</p><p>235,5 kr</p></div>
                    <p class="cart_footer__disclaimer">levering udregnes ved checkout</p>
                </div>
                <button>gå til checkout</button>
            </div>
        </div>
    </form>
</div>

<script>
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

    setupCart();

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


</script>

<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Rosarivo:ital@0;1&display=swap" rel="stylesheet">
<style>
    .cart_footer{
        width: 100%;
        border-top: 1px solid #C2C2C2;
        padding-top: 1rem;
    }
    .cart_footer button{
        display: flex;
        justify-content: center;
        gap: 10px;

        margin-top: 1.5rem;
        width: 100%;
        padding: 12px 24px;
        border-radius: 4px;
        background: #F57E18;
        border: none;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);

        color: #FFF;
        font-family: Rosarivo;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .cart_footer p{
        font-family: 'Rosarivo';
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
    .cart_item__quantity .input-group input{
        border: none;
        background: none;
        border-radius: 0;
    }
    .cart_item__quantity .input-group{
        border: #829B3A solid 1px;
        border-radius: 4px;
        padding: .5rem;
        display: flex;
    }
    .cart_item__quantity .input-group input[type="number"]{
        width: 2rem;
        position: relative;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        resize: vertical;
        font-family: 'Rosarivo';
    }
    .cart_item__quantity .input-group input[type="number"]:focus-visible{
        outline: #C2C2C2;
    }
    .cart_item__quantity .input-group input[type="button"]{
        cursor: pointer;
        font-size: 24px;
        font-family: 'Rosarivo';
        line-height: 16px;
    }
    .drawer_cart{
        height: 100vh;
        width: 100vw;
        max-width: 400px;

        background: white;
        box-shadow: -4px 0px 4px 0px rgba(0, 0, 0, 0.25);

        position: fixed;
        top: 0;
        bottom: 0;
        right: -400px;

        transition: right 0.25s cubic-bezier(0.104, 0.204, 0.492, 1);
    }
    .drawer_cart.open{
        right: 0;
        transition: right 0.25s cubic-bezier(0.104, 0.204, 0.492, 1);
    }
    #drawer_cart__form{
        height: 100vh;
    }
    .drawer_cart p{
        margin: 0;
    }
    .drawer_cart__inner{
        height: calc(100% - 4rem);
        width: calc(100% - 4rem);
        margin: 2rem;

        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    .drawer_cart__inner h2{
        color: #000;
        font-family: 'Patrick Hand';
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-transform: uppercase;
        margin: 0;
    }
    .drawer_cart .close{
        position: absolute;
        top: 1rem;
        right: 1rem;
        cursor: pointer;
    }
    .drawer_cart___header{
        width: 100%;
    }
    .drawer_cart .drawer_cart___cart_items_header{
        width: 100%;
        display: flex;
        padding: 16px 0 8px 0;
        justify-content: space-between;
        border-bottom: 1px solid #C2C2C2;

        color: #C2C2C2;
        font-family: 'Rosarivo';
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-transform: uppercase;
    }
    .drawer_cart__cart_items{
        height: 100%;
        width: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 1rem 0;
    }
    .cart_item{
        display: flex;
        color: #000;
        width: 100%;
        gap: 0.5rem;

    }
    .cart_item__inner{
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: .5rem
    }
    .cart_item p{
        font-family: 'Rosarivo';
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .cart_item__product_name,
    .cart_item__price_total{
        font-size: 16px;
    }
    .cart_item__variant_name,
    .cart_item__price_per_item,
    .cart_footer__disclaimer{
        font-size: 12px;
        color: rgba(26, 26, 26, 0.75);
    }
    .cart_item img{
        width: 100px;
        height: 102.835px;
    }
    .cart_item__info,
    .cart_item__quantity,
    .cart_footer__total{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .cart_item__prices,
    .cart_item__names{
        display: flex;
        flex-direction: column;
    }
    .cart_item__prices p{
        display: flex;
        justify-content: flex-end;
    }
    .cart_item__quantity .remove{
        margin: auto 0;
        cursor: pointer;
    }
    .cart_item__quantity .remove svg{
        pointer-events: none;
    }
</style>