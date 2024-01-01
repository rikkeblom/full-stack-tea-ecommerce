<?php use Illuminate\Support\Facades\Session; $cart = Session::get('cart'); ?>

<div class="drawer_cart">
    <div class="close">@include('frontend.componets.svger.kryds')</div>
    <div id="drawer_cart__form" >
        @csrf
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
                    @foreach($cart as $key=>$item)
                        <div class="cart_item" data-cart_item_id="{{$key}}">
                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/LV/PB/AM/112068631/leaf-tea-500x500.jpg" alt="">
                            <div class="cart_item__inner">
                                <div class="cart_item__info">
                                    <div class="cart_item__names">
                                        <p class="cart_item__product_name">{{ isset($item['produktNavn']) ? $item['produktNavn'] : 'N/A' }}</p>
                                        <p class="cart_item__variant_name">{{ $item['variant']['variantType'] }}: {{ $item['variant']['variantNavn'] }}</p>
                                    </div>
                                    <div class="cart_item__prices">
                                        <p class="cart_item__price_total"><span>{{$item['variant']['variantPris']}}</span> kr</p>
                                        <p class="cart_item__price_per_item"><span class="price_per_item__current_price">{{$item['variant']['variantPris']}} kr<span><span class="price_per_item__original_price"><span></p>
                                    </div>
                                </div>
                                <div class="cart_item__quantity">
                                    <div class="input-group">
                                        <input data-cart_item_id="{{$key}}" data-variant_stock="{{$item['variant']['variantLager']}}" type="button" value="-" class="button-minus" data-field="quantity">
                                        <input data-cart_item_id="{{$key}}" data-variant_stock="{{$item['variant']['variantLager']}}" type="number" step="1" max="" value="{{$item['quantity']}}" name="quantity" class="quantity-field">
                                        <input data-cart_item_id="{{$key}}" data-variant_stock="{{$item['variant']['variantLager']}}" type="button" value="+" class="button-plus" data-field="quantity">
                                    </div>
                                    <div data-cart_item_id="{{$key}}" class="remove">@include('frontend.componets.svger.trash')</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else 
                <p>Din kurv er tom</p>
                @endif
            </div>
            
            <div class="cart_footer">
                <div class="cart_footer__details">
                    <div class="cart_footer__total"><p>Subtotal</p><p><span></span> kr</p></div>
                    <p class="cart_footer__disclaimer">levering udregnes ved checkout</p>
                </div>
                <a href="/checkout"><button @if(!$cart && !is_array($cart)) disabled @endif>gå til checkout</button></a>
            </div>
        </div>
    </div>
</div>

