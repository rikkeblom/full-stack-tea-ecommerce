@extends('frontend.layouts.main_layout')

@section('indhold')
    <h1>test kurven</h1>


    <div style="padding: 1rem; border: 1px solid black">

    @foreach($items as $key=>$item)
        <p>Nyt Item, id: {{$item->id}}</p>
        @foreach($item->variant as $key=>$variant)
            <p>Variant id: {{$variant->id}}, {{$variant->produkt->titel}}, {{$variant->type}}: {{$variant->titel}}, {{$variant->pris}}</p>
        @endforeach
    @endforeach
    
    </div>

@endsection
