<header>
    <!-- Links to pages -->
        <div class="links">
            <button class="brugerMenu">
                @include('frontend.componets.svger.burgerMenu')
            </button>
            <a href="/allProducts">Shop Te</a>
            <a href="">Om Rivitea</a>
        </div>
    <!--/ Links to pages -->
    <!-- Logo -->
        <div>
            <a href="/">
                @include('frontend.componets.svger.logo')
            </a>
        </div>
    <!--/ Logo -->
    <!-- Cart and Search icons -->
        <div class="svger">
            <!-- Search icon -->
            <div>
                @include('frontend.componets.svger.search')
            </div>
            <!--/ Search icon -->
            <!-- Cart icon -->
            <div class="cart open">
                @include('frontend.componets.svger.cart')
            </div>
            <!--/ Cart icon -->
        </div>
    <!--/ Cart and Search icons -->
</header>
<!-- Links to pages mobile -->
<div class="links_box">
    <a href="/allProducts">Shop Te</a>
    <a href="">Om Rivitea</a>
</div>
<!--/ Links to pages mobile -->