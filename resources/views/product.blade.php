<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.componets.head')
</head>
    @include('frontend.componets.header')
<body>
    <div class="productPage">
        @include('frontend.componets.product_images')
        <div class="productPageDiv">
            @include('frontend.componets.product_text')
            @include('frontend.componets.product_buttons')
        </div>
    </div>
</body>
    @include('frontend.componets.footer')
</html>