<div class="main_form"> 
    <div class="doubleInput">
        <div>
            <label for="fornavn">Fornavn</label>
            <input type="text" name="fornavn" value="{{old('fornavn')}}" class="@error('fornavn') is-invalid @enderror">
            @error('fornavn')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="efternavn">Efternavn</label>
            <input type="text" name="efternavn" value="{{old('efternavn')}}" class="@error('') is-invalid @enderror">
            @error('efternavn')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div>
        <label for="firma">Firmanavn (valgfri)</label>
        <input type="text" name="firma" value="{{old('firma')}}" class="@error('firma') is-invalid @enderror">
        @error('firma')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="land">Land</label>
        <input type="text" name="land" value="Danmark" value="{{old('land')}}" class="@error('land') is-invalid @enderror">
        @error('land')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="adresse_1">Adresse</label>
        <input type="text" name="adresse_1" value="{{old('adresse_1')}}" placeholder="Gadenavn og nummer" id="" class="@error('adresse_1') is-invalid @enderror">
        @error('adresse_1')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="adresse_2" value="{{old('adresse_2')}}" placeholder="Lejlighed, værelse, enhed, o.l (valgfri)" id="" class="@error('adresse_2') is-invalid @enderror">
        @error('adresse_2')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="doubleInput">
        <div>
            <label for="postnummer">Postnummer</label>
            <input type="text" name="postnummer" value="{{old('postnummer')}}" class="@error('postnummer') is-invalid @enderror">
            @error('postnummer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="by">By</label>
            <input type="text" name="by" value="{{old('by')}}" class="@error('by') is-invalid @enderror">
            @error('by')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div>
        <label for="email">Email adresse</label>
        <input type="text" name="email" value="{{old('email')}}" class="@error('email') is-invalid @enderror">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="gentag_email">Gentag email adresse</label>
        <input type="text" name="gentag_email" value="{{old('gentag_email')}}" class="@error('gentag_email') is-invalid @enderror">
        @error('gentag_email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="mobil">Mobilnummer</label>
        <input type="text" name="mobil" value="{{old('mobil')}}" class="@error('mobil') is-invalid @enderror">
        @error('mobil')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>