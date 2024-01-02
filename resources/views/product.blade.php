@extends('frontend.layouts.main_layout')

@section('indhold')
    <div class="productPage">
        @include('frontend.componets.product_images')
        <div class="productPageDiv">
            @include('frontend.componets.product_text')
            @include('frontend.componets.product_buttons')
        </div>
    </div>
@endsection