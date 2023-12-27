<div class="buttonsContainer">
    <h3>VÆGT</h3>
    <form>
        <div class="weightButtons">
            @foreach ($variant_produkt_id as $key=>$variant)
            <label for="{{$variant->titel}}">
                <input type="radio" name="{{$variant->titel}}" id="input-{{$variant->titel}}" class="weight">
                <span data-variant_pris="{{$variant->pris}}" data-variant_lager="{{$variant->lager}}" data-variant_id="{{$variant->id}}" data-variant_type="{{$variant->type}}">{{$variant->titel}}</span>
            </label>
            @endforeach
        </div>
        <div class="moreLess_kurv_buttons">
            <div class="moreLessButtons">
                <input type="button" id="minus" value="-">
                <input value="1" type="number" id="amount">
                <input type="button" id="plus" value="+">
            </div>
            <button onclick="addToCart()" class="kurvButton">Tilføj til kurv</button>
        </div>
    </form>
    {{-- <div class="inventory">
        <div></div>
        <p>Produktet er på lager</p>
    </div> --}}
</div>