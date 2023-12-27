@foreach ($variant_produkt_id as $key=>$variant)
<div class="textContainer" id="{{$variant->titel}}">
    <div class="namePriceContainer">
        <h2>{{$variant->produkt->titel}}</h2>
        <div>
            <p class="variantPris">{{$variant->pris}} kr</p>
            <p>&nbsp</p>
            <p class="variantTitel">{{$variant->titel}}</p>
        </div>
    </div>
    <h3>Japansk rullet grøn te</h3>
    <p>{{$variant->produkt->beskrivelse}}</p>
</div>
@endforeach