<footer>
    <!-- Logo -->
        <div>
            <a href="/home">
                @include('frontend.componets.svger.logo')
            </a>
        </div>
    <!--/ Logo -->
    <!-- SoMe -->
        <div class="SoMe">
            <h2>BESØG</h2>
            <div>
                @include('frontend.componets.svger.facebook')
                <h3>FACEBOOK</h3>
            </div>
            <div>
                @include('frontend.componets.svger.instagram')
                <h3>INSTAGRAM</h3>
            </div>
        </div>
    <!--/ SoMe -->
    <!-- Links to pages -->
        <div class="footer_links">
            <a href="/allProducts">Shop Te</a>
            <a href="#">Om Rivitea</a>
            <a href="#">Privatlivspolitik</a>
        </div>
    <!--/ Links to pages -->
    <!-- Trust -->
        <div class="trust">
            @include('frontend.componets.svger.trustpilot')
            <img src="{{asset('frontend/img/smilykontrol.png')}}" alt="smilykontrol">
        </div>
    <!--/ Trust -->
    <!-- Kontakt os -->
        <div class="kontakt">
            <h2>KONTAKT OS</h2>
            <div class="info">
                <p>12345678</p>
                @include('frontend.componets.svger.phone')
            </div>
            <div class="info">
                <p>Rivitea@gmail.com</p>
                @include('frontend.componets.svger.mail')
            </div>
            <div class="info">
                <div>
                    <p>StedIKøbenhavn 5</p>
                    <p>2200 København N</p>
                </div>
                @include('frontend.componets.svger.map')
            </div>
        </div>
    <!--/ Kontakt os -->
    <script src="{{asset('frontend/js/mobileHeader.js')}}"></script>
    <script src="{{asset('frontend/js/carouselarrow.js')}}"></script>
    <script src="{{asset('frontend/js/allProductFilter.js')}}"></script>
    <script src="{{asset('frontend/js/allProductPageLimit.js')}}"></script>
    <script src="{{asset('frontend/js/productButtonsSwitch.js')}}"></script>
</footer>