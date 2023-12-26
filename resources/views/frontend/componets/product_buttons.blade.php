<div class="buttonsContainer">
    <h3>VÆGT</h3>
    <form>
        <div class="weightButtons">
            @foreach ($variant_produkt_id as $key=>$variant)
            <label for="{{$variant->titel}}"">
                <input type="radio" name="{{$variant->titel}}" id="input-{{$variant->titel}}" class="weight">
                <span>{{$variant->titel}}</span>
            </label>
            @endforeach
        </div>
    </form>
    <div class="moreLess_kurv_buttons">
        <div class="moreLessButtons">
            <button id="plus">+</button>
            <p id="amount">1</p>
            <button id="minus">-</button>
        </div>
        <button class="kurvButton">Tilføj til kurv</button>
    </div>
    <div class="inventory">
        <div></div>
        <p>Produktet er på lager</p>
    </div>
</div>