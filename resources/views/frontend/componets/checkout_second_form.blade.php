<div class="right_column_form">
    <div class="betalingsmetoder">
        <div>
            <input type="radio" id="mobilePay" name="betalingsmetode" value="mobilePay" unchecked />
            <label for="mobilePay">MobilePay</label>
        </div>
        <div>
            <input type="radio" id="Dankort" name="betalingsmetode" value="Dankort" unchecked />
            <label for="Dankort">Dankort</label>
        </div>
    </div>
    <div class="seperation_line">
        <p>
            Deres personlige data vil bliv andvent til at gennemføre Deres bestilling, 
            understøtte din brugeroplevelse på webshoppen, og til andre formål, 
            som er beskrevet i vores <a href="#">Privatlivspolitik</a>.
        </p>
    </div>
    <div class="seperation_line">
        <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions" />
        <label for="terms_and_conditions">
            Jeg har læst og accepterer webshoppens <a href="#">Vilkår og betingelser</a>.
        </label>
    </div>
    <button>gå til checkout</button>
</div>

<style>
    #checkout_form .seperation_line {
        padding-top: 1rem;
        border-top: 1px solid #829B3A;
    }
    #checkout_form button {
        display: flex;
        justify-content: center;
        gap: 10px;

        width: 100%;
        padding: 12px 24px;
        border-radius: 4px;
        background: #F57E18;
        border: none;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);

        color: #FFF;
        font-family: Rosarivo;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #checkout_form .right_column_form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    #checkout_form input[type="radio"] {
        height: 1.2rem;
        width: 1.2rem;
    }
    #checkout_form .right_column_form .betalingsmetoder {
        display: flex;
        flex-direction: column;
        gap: .5rem;
    }
    #checkout_form .right_column_form .betalingsmetoder div{
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: .5rem;
    }
    #checkout_form .right_column_form .betalingsmetoder label{
        transform: translateY(2px);
    }
</style>