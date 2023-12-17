<div class="main_form"> 
    <div class="doubleInput">
        <div>
            <label for="fornavn">Fornavn</label>
            <input type="text" name="fornavn" id="">
        </div>
        <div>
            <label for="efternavn">Efternavn</label>
            <input type="text" name="efternavn" id="">
        </div>
    </div>
    <div>
        <label for="firma">Firmanavn (valgfri)</label>
        <input type="text" name="firma" id="">
    </div>
    <div>
        <label for="land">Land</label>
        <input type="text" name="land" value="Danmark" id="">
    </div>
    <div>
        <label for="adresse_1">Adresse</label>
        <input type="text" name="adresse_1" id="" placeholder="Gadenavn og nummer">
        <input type="text" name="adresse_2" id="" placeholder="Lejlighed, værelse, enhed, o.l (valgfri)">
    </div>
    <div class="doubleInput">
        <div>
            <label for="postnummer">Postnummer</label>
            <input type="text" name="postnummer" id="">
        </div>
        <div>
            <label for="by">By</label>
            <input type="text" name="by" id="">
        </div>
    </div>
    <div>
        <label for="email">Email adresse</label>
        <input type="text" name="email" value="Danmark" id="">
    </div>
    <div>
        <label for="email_gentag">Gentag email adresse</label>
        <input type="text" name="email_gentag" value="Danmark" id="">
    </div>
    <div>
        <label for="mobil">Mobilnummer</label>
        <input type="text" name="mobil" value="Danmark" id="">
    </div>
</div>

<style>
    #checkout_form .main_form{
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: .5rem;
    }
    #checkout_form .main_form div {
        display: flex;
        flex-direction: column;
    }
    #checkout_form .main_form .doubleInput {
        flex-direction: row;
        gap: .5rem;
    }
    #checkout_form .main_form input + input {
        margin-top: .5rem;
    }
    #checkout_form .main_form .doubleInput div {
        width: 100%;
    }
    #checkout_form .main_form label {
        color: #000;
        font-size: 1rem;
    }
    #checkout_form .main_form input {
        border-radius: 4px;
        border: 1px solid #C2C2C2;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
        padding: .5rem 1rem;
        font-size: 16px;
        font-family: 'Rosarivo';
    }
</style>