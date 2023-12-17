@extends('frontend.layouts.main_layout')

@section('indhold')
    <h1>test kurven</h1>
    @foreach($kurv as $key=>$kurv)
    @foreach($kurv->item as $key=>$item)
    <div style="padding: 1rem; border: 1px solid black">
    <p>Nyt Item, id: {{$item->id}}</p>
    @foreach($item->variant as $key=>$variant)
    <table>
        <tr>    
            <td>{{$variant->produkt->titel}}, prod_id: {{$variant->produkt->id}}, var_id: {{$variant->id}}</td>
        </tr>
        <tr>    
            <td>{{$variant->type}}: {{$variant->titel}}</td>
            <td>{{$variant->pris}}</td>
        </tr>
    </table>
    @endforeach
    </div>
    @endforeach
    @endforeach
@endsection