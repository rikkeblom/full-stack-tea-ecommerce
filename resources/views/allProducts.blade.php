@extends('frontend.layouts.main_layout')

@section('indhold')
    @include('frontend.componets.allProduct_header')
    @include('frontend.componets.allProduct_sorting')
    <div class="allProducts_wrapper">
        @include('frontend.componets.allProduct_filter')
        <div>
            @include('frontend.componets.allProduct_products')
            @include('frontend.componets.allProduct_seo')
        </div>
    </div>
@endsection