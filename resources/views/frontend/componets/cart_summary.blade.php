
{{-- @foreach($position as $position) --}}
<div class="cart_summary {{$position}}">
    <div>
        <h3>Din kurv</h3>
        <div class="cart_summary__products">
            <div><p>Assam</p><p>kr 136.00</p></div>
            <div><p>Earl Grey</p><p>kr 49.00</p></div>
        </div>
        <div class="cart_summary__subtotals">
            <div><p>Subtotal</p><p>kr 182.00</p></div>
            <div><p>Levering</p><p>kr 40.00</p></div>
        </div>
        <div class="cart_summary__total">
            <div><p>Total</p><p>kr 222.00</p></div>
        </div>
    </div>
</div>
{{-- @endforeach --}}

<style>
    #checkout_form .cart_summary {
        padding: 1rem;
        border-radius: 4px;
        border: 1px solid #D9D9D9;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        margin-bottom: 1.5rem;
    }
    #checkout_form .cart_summary.mobile{
        display: none
    }
    @media screen and (max-width: 767px){
        #checkout_form .cart_summary.mobile{
            display: block
        }
        #checkout_form .cart_summary.desktop{
        display: none
    }
    }
    #checkout_form .cart_summary > div {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
        border-radius: 4px;
        background: #F5F5F5;
    }
    #checkout_form .cart_summary .cart_summary__products,
    #checkout_form .cart_summary .cart_summary__subtotals,
    #checkout_form .cart_summary .cart_summary__total {
        border-top: 1px solid #829B3A;
        padding-top: 16px;
        display: flex;
        flex-direction: column;
        gap: .5rem;
    }
    #checkout_form .cart_summary .cart_summary__products div,
    #checkout_form .cart_summary .cart_summary__subtotals div,
    #checkout_form .cart_summary .cart_summary__total div {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>