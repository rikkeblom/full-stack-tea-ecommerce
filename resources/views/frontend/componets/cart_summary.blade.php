{{-- @foreach($position as $position) --}}
<?php use Illuminate\Support\Facades\Session; $cart = Session::get('cart'); ?>
<div class="cart_summary {{$position}}">
    <div>
        <h3>Din kurv</h3>
        @if($cart && is_array($cart))
        <div class="cart_summary__products">
        <?php $total = 0 ?>
        @foreach($cart as $key=>$item)
            <div data-cart_item_id="{{$key}}" class="cart_summary__product">
                <p>{{ isset($item['produktNavn']) ? $item['produktNavn'] : 'N/A' }}, {{ $item['variant']['variantNavn'] }}</p><p>kr {{$item['variant']['variantPris']}}</p>
            </div>
            <?php $total = $total + $item['variant']['variantPris'] ?>
        @endforeach
        </div>
        <div class="cart_summary__total">
            <div><p>Total</p><p>kr <?php echo $total ?></p></div>
        </div>
        @else 
        <p>kurven er tom</p
        @endif
    </div>
</div>
{{-- @endforeach --}}
