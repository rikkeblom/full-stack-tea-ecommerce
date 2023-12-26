<?php 
    use Illuminate\Support\Facades\Session;
    session_start(); 
    // Session::put('cart', []);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.componets.head')
</head>
    @include('frontend.componets.header')
<body>
    @include('frontend.componets.kurv')

    @yield('indhold')

</body>
    @include('frontend.componets.footer')
</html>