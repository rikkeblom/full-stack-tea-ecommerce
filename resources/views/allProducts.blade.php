<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.componets.head')
</head>
    @include('frontend.componets.header')
<body>
    @include('frontend.componets.allProduct_header')
    @include('frontend.componets.allProduct_sorting')
    <div class="allProducts_wrapper">
        @include('frontend.componets.allProduct_filter')
        <div>
            @include('frontend.componets.allProduct_products')
            @include('frontend.componets.allProduct_seo')
        </div>
    </div>
</body>
    @include('frontend.componets.footer')
</html>