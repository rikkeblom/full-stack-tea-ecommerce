<div class="drawer_cart">
    <div class="close">@include('frontend.componets.svger.kryds')</div>
    <form
        action=""
        id="drawer_cart__form"
        class=""
        method="post"
    >
        <div class="drawer_cart__inner">
            <div class="drawer_cart___header">            
                <h2>Din kurv</h2>
                <div class="drawer_cart___cart_items_header">
                    <span>Produkt</span>
                    <span>Total</span>
                </div>
            </div>

            <div class="drawer_cart__cart_items">
            @foreach($items as $key=>$item)
            @foreach($item->variant as $key=>$variant)
                <div class="cart_item" data-variant_id="{{$item->id}}">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/LV/PB/AM/112068631/leaf-tea-500x500.jpg" alt="">
                    <div class="cart_item__inner">
                        <div class="cart_item__info">
                            <div class="cart_item__names">
                                <p class="cart_item__product_name">{{$variant->produkt->titel}}</p>
                                <p class="cart_item__variant_name">{{$variant->type}}: {{$variant->titel}}</p>
                            </div>
                            <div class="cart_item__prices">
                                <p class="cart_item__price_total"><span>{{$variant->pris}}</span> kr</p>
                                <p class="cart_item__price_per_item"><span class="price_per_item__current_price">{{$variant->pris}} kr<span><span class="price_per_item__original_price"><span></p>
                            </div>
                        </div>
                        <div class="cart_item__quantity">
                            <div class="input-group">
                                <input data-variant_id="{{$item->id}}" data-variant_stock="10" type="button" value="-" class="button-minus" data-field="quantity">
                                <input data-variant_id="{{$item->id}}" data-variant_stock="10" type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                <input data-variant_id="{{$item->id}}" data-variant_stock="10" type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
                            <div data-variant_id="{{$item->id}}" class="remove">@include('frontend.componets.svger.trash')</div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endforeach
            </div>
            
            <div class="cart_footer">
                <div class="cart_footer__details">
                    <div class="cart_footer__total"><p>Subtotal</p><p><span></span> kr</p></div>
                    <p class="cart_footer__disclaimer">levering udregnes ved checkout</p>
                </div>
                <button>gå til checkout</button>
            </div>
        </div>
    </form>
</div>