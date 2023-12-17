@extends('frontend.layouts.main_layout')

@section('indhold')
    <h1>test routes and views</h1>
    @foreach($kollektion as $key=>$kollektion)
        <h2>{{$kollektion->titel}}</h2>
        <p>{{$kollektion->beskrivelse}}</p>

        <h3>Produkter i kollektionen</h3>
        <table>
            @foreach($kollektion->produkt as $key=>$produkt)
            <tr>    
                <td>Titel: {{$produkt->titel}}</td>
                <td>Beskrivelse: {{$produkt->beskrivelse}}</td>
            </tr>
            @endforeach
        </table>
    @endforeach
@endsection