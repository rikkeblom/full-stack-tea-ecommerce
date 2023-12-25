@extends('frontend.layouts.main_layout')

@section('indhold')
<div id="checkout">
    <h1>Fakturaoplysninger</h1>
    <form
    action=""
    id="checkout_form"
    class=""
    method="post"
    >
    <div class="right_column">
        @include('frontend.componets.cart_summary',['position' => 'mobile'])
        @include('frontend.componets.checkout_main_form')
    </div>
    <div class="right_column">
        @include('frontend.componets.cart_summary',['position' => 'desktop'])
        @include('frontend.componets.checkout_second_form')
    </div>

    </form>
</div>
@endsection

<style>
    #checkout{
        padding: 2rem;
    }

    #checkout h1{
        color: #000;
        font-family: 'Patrick Hand';
        font-size: 40px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-decoration-line: underline;
    }
    #checkout_form {
        display: flex;
        flex-direction: row;
        width: 100%;
        gap: 1.5rem;
        font-family: 'Rosarivo';
    }
    @media screen and (max-width: 767px){
        #checkout_form {
            flex-direction: column;
        }
    }
    #checkout_form .right_column {
        width: 100%;
        display: flex;
        flex-direction: column;
    }
    #checkout_form h3,
    #checkout_form p{
        margin: 0;
    }
</style>
