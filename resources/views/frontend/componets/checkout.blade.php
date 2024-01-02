@extends('frontend.layouts.main_layout')

@section('indhold')
<div id="checkout">
    <h1>Fakturaoplysninger</h1>
    <form
    id="checkout_form"
    method="post"
    >
    @csrf
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