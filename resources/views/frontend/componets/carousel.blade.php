<div class="carouselContainer">
    <h2>Mest Populære</h2>
    <div class="arrowContainer">
        <button id="PrevSlider" class="sliderButton leftButton">
            @include('frontend.componets.svger.arrowLeft')
        </button>
        <div class="carousel">
        @foreach($varianter as $key=>$variant)
        @foreach($variant as $key=>$produkt)
            @if ($loop->first)
            <div class="carouselProduct">
                <img src="{{asset('frontend/img/example_product.jpg')}}" alt="product image">
                <div class="carouselText">
                    <!-- <h3>{{$variant->produkt->titel}}</h3> -->
                    <div>
                        <p>{{$variant->pris}} kr</p>
                        <p>&nbsp</p>
                        <p>{{$variant->titel}}</p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
        @endforeach
        </div>
        <button id="nextSlider" class="sliderButton rightButton">
            @include('frontend.componets.svger.arrowRight')
        </button>
    </div>
</div>