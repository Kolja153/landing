<div class="swiper-slide">
    <div
        class="training-program-item training-program-item-classic"
    >
        <h3 class="training-program-title">{{ $product['title'] }}</h3>
        <ul class="training-program-list">
            <li>{{ $product['lesson'] }}</li>
            <li>
                <span>Програма:</span>{{ $product['program'] }}
            </li>
            <li>
                <span>Тривалість навчання:</span> {{ $product['schedule'] }}
            </li>
            <li><span>Тривалість заняття:</span>{{ $product['duration'] }}</li>
        </ul>
        <div class="training-program-price">
            <p>{{ $product['price'] }}</p>
            <span><s>{{ $product['old_price'] }}</s></span>
            <br>
            <span>{{ $product['price_info'] }}</span>
        </div>
        <a
            href="#form-section"
            data-training-program="{{ $product['id'] }}"
            class="btn btn-primary btn-lg"
        >
            Записатись
        </a>
    </div>
</div>
