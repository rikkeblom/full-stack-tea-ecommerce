<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <h2>test routes and views</h2>

    <table>

        @foreach($produkter as $key=>$produkt)
        <tr>    
            <td>{{$produkt->titel}}</td>
            <td>{{$produkt->beskrivelse}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>