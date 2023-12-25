<?php 
    use Illuminate\Support\Facades\Session;
    session_start(); 
    // Storing data in the session
    Session::put('cart', [
        1=>[
            'produktNavn' => 'Earl Grey',
            'variant' =>            
                    [
                        'variantNavn' => '100g',
                        'variantType' => 'vægt',
                        'variantPris' => '49'
                    ]
            ,
            'quantity' => 2
        ]
    ]);

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