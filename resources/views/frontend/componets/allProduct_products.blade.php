<div class="allProducts_container">
    <div class="allProducts_list">
    @foreach($varianter as $key=>$variant)
    @foreach($variant as $key=>$produkt)
        @if ($loop->first)
        <div class="allProduct_product">
            <img src="{{asset('frontend/img/example_product.jpg')}}" alt="product image">
            <div class="carouselText">
                <h3>{{$variant->produkt->titel}}</h3>
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
    <ul class="allProduct_listPage">
        <li class="active">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
</div>