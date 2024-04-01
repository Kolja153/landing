<section id="training-program" class="training-program section container">
    <div class="training-program-inner">
        <h2>Програми навчання першого танцю "FedanStudio"</h2>
        <span class="training-program-info"
        >*навчання проходить лише на індивідуальних заняттях</span
        >
        <div class="swiper-navigation">
            <div class="swiper-navigation-prev">
                <span class="icon-circle-left"></span>
            </div>
            <div class="swiper-navigation-next">
                <span class="icon-circle-right"></span>
            </div>
        </div>
        <div class="training-program-carousel">
            <div id="training-carousel" class="swiper">
                <div class="swiper-wrapper">

                    @foreach($products as $product)
                        @include('home.product', ['product' => $product] )
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
