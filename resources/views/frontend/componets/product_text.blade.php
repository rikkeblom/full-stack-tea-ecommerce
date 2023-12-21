@foreach ($variant_produkt_id as $key=>$variant)
<div class="textContainer" id="{{$variant->titel}}">
    <div class="namePriceContainer">
        <h2>{{$variant->produkt->titel}}</h2>
        <div>
            <p>{{$variant->pris}} kr</p>
            <p>&nbsp</p>
            <p>{{$variant->titel}}</p>
        </div>
    </div>
    <h3>Japansk rullet grøn te</h3>
    <p>Lorem ipsum dolor sit amet consectetur. 
        Ultrices interdum dignissim vulputate eget id. 
        Convallis euismod semper adipiscing donec ultrices cursus eget sed consequat. 
        Ornare volutpat sapien id commodo. 
        Adipiscing vitae in facilisi at eu.
    </p>
</div>
@endforeach