<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing med layout</title>
</head>

<header style="width: 100%; padding: 1rem 0; background: rgb(198, 208, 211)">
    <div class="open" style="padding: 1rem; background: white; margin: 0 1rem 0 auto; width: fit-content; cursor:pointer">Åben Kurv</div>
</header>
<body>
@include('frontend.componets.kurv')

<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Rosarivo:ital@0;1&display=swap" rel="stylesheet">



@yield('indhold')

</body>
</html>