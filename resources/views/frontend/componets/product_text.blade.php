@foreach ($variant_produkt_id as $key=>$variant)
<div class="textContainer" id="{{$variant->titel}}" data-id="{{$variant->produkt->id}}_{{$variant->titel}}">
    <div class="namePriceContainer">
        <h2 class="productTitel">{{$variant->produkt->titel}}</h2>
        <div>
            <p class="productPrice">{{$variant->pris}} kr</p>
            <p>&nbsp</p>
            <p class="productWeight">{{$variant->titel}}</p>
        </div>
    </div>
    <h3>Japansk rullet grøn te</h3>
    <p>{{$variant->produkt->beskrivelse}}</p>
</div>
@endforeach