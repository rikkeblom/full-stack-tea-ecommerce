<div class="right_column_form">
    <div class="betalingsmetoder">
        <div>
            <input type="radio" id="mobilePay" name="betalingsmetode" value="mobilePay" unchecked class="@error('betalingsmetode') is-invalid @enderror"/>
            <label for="mobilePay">MobilePay</label>
        </div>
        <div>
            <input type="radio" id="Dankort" name="betalingsmetode" value="Dankort" unchecked class="@error('betalingsmetode') is-invalid @enderror"/>
            <label for="Dankort">Dankort</label>
        </div>
    </div>
    @error('betalingsmetode')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="seperation_line">
        <p>
            Deres personlige data vil bliv andvent til at gennemføre Deres bestilling, 
            understøtte din brugeroplevelse på webshoppen, og til andre formål, 
            som er beskrevet i vores <a href="#">Privatlivspolitik</a>.
        </p>
    </div>
    <div class="seperation_line">
        <input type="checkbox" id="terms_and_conditions" value="1" name="terms_and_conditions" class="@error('terms_and_conditions') is-invalid @enderror" />
        <label for="terms_and_conditions">
            Jeg har læst og accepterer webshoppens <a href="#">Vilkår og betingelser</a>.
        </label>
        @error('terms_and_conditions')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button>gå til checkout</button>
</div>