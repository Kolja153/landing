<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fedan studio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:wght@300;400&family=Viaoda+Libre&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="dist/index.css" />
</head>
<body>
<!-- HEADER START -->
@include('home.header')
<!-- HEADER END -->
<!-- INDIVIDUAL DANCE START -->
<section class="individual-dance container">
    <div class="individual-dance-inner">
        <h2 class="individual-dance-title">
            <span class="part1">Індивідуальні Постановки</span>
            <span class="part2">Першого Весільного Танцю</span>
        </h2>
        <div
            class="individual-dance-image"
            style="
            background: linear-gradient(
                0deg,
                rgba(255, 255, 255, 0.4),
                rgba(255, 255, 255, 0.4)
              ),
              url(./dist/images/image-example.jpg);
          "
        ></div>
        <div class="individual-dance-description">
            <p>
                Навчимо танцювати з нуля за 5 занять.<br />У будь якому стилі та в
                зручний для вас час.
            </p>
            <a
                href="#training-program"
                type="button"
                class="btn btn-outline btn-lg"
            >
                Детальніше
            </a>
        </div>
    </div>
</section>
<!-- INDIVIDUAL DANCE END -->
<!-- FIRST DANCE START -->
<section class="first-dance section container">
    <div class="first-dance-inner">
        <div class="first-dance-text">
            <span class="first-dance-decor icon-section-decor-left"></span>
            <h2>Перший танець - це невідємна частина вашого весілля</h2>
            <ul class="styled-list">
                <li>Зробить феєричним початок вашого весілля</li>
                <li>Здивує гостей та родичів</li>
                <li>Незабутній уривок весільного відео</li>
                <li>Просто це модно</li>
            </ul>
        </div>
        <div class="first-dance-image">
            <img src="./dist/images/image-example.jpg" alt="First dance" />
        </div>
    </div>
</section>
<!-- FIRST DANCE END -->
<!-- WEDDING DANCE START -->
<section class="wedding-dance section container">
    <div class="images-set-section">
        <h2>
            Вже <span>90%</span> наречених роблять постановку свого весільного
            танцю
        </h2>
        <div class="images-set-section-images">
            <div
                class="images-set-section-image"
                style="background-image: url(./dist/images/image-example.jpg)"
            ></div>
            <div
                class="images-set-section-image"
                style="background-image: url(./dist/images/image-example.jpg)"
            ></div>
            <div
                class="images-set-section-image"
                style="background-image: url(./dist/images/image-example.jpg)"
            ></div>
        </div>
    </div>
</section>
<!-- WEDDING DANCE END -->
<!-- INFO SECTION START -->
<section class="info-section section container">
    <div class="info-section-inner">
        <div class="info-section-text">
            <div class="info-section-decor">
                <span class="icon-section-decor-right"></span>
            </div>
            <h2>Що таке "FedanStudio"?</h2>
            <ul class="styled-list">
                <li>3 танцювальні зали в м. Львів</li>
                <li>8 років навчаєм танцювати наречених</li>
                <li>
                    Професійні хореографи які працюють з молодими парами більше одно
                    року
                </li>
                <li>7 днів на тиждень з 10:00 до 23:00.</li>
                <li>Підбір музики для танцю</li>
                <li>Кожна постановка екслюзивна</li>
                <li>Індивідуальні та групові заняття</li>
            </ul>
        </div>
        <div class="info-section-image">
            <img src="./dist/images/image-example.jpg" alt="First dance" />
        </div>
    </div>
</section>
<!-- INFO SECTION END -->
<!-- TRAINING PROGRAM START -->
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
<!-- TRAINING PROGRAM END -->
<!-- RESULTS DANCE START -->
<section class="results-section section container">
    <div
        class="images-set-section images-set-section-reverse results-section-inner"
    >
        <h2>Ми навчили танцювати <span>1948</span> наречених</h2>
        <div class="images-set-section-images">
            <div
                class="images-set-section-image"
                style="background-image: url(./dist/images/image-example.jpg)"
            ></div>
            <div
                class="images-set-section-image"
                style="background-image: url(./dist/images/image-example.jpg)"
            ></div>
            <div
                class="images-set-section-image"
                style="background-image: url(./dist/images/image-example.jpg)"
            ></div>
        </div>
    </div>
</section>
<!-- RESULTS DANCE END -->
<!-- FEEDBACKS SECTION START -->
<section class="feedback-section section">
    <div class="container feedback-section-inner">
        <div class="feedback-section-top">
            <h2 class="feedback-section-title">Відгуки наших учнів</h2>
            <div class="swiper-navigation">
                <div class="swiper-navigation-prev">
                    <span class="icon-circle-left"></span>
                </div>
                <div class="swiper-navigation-next">
                    <span class="icon-circle-right"></span>
                </div>
            </div>
        </div>
        <div class="feedback-section-carousel">
            <div id="feedback-carousel" class="swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="feedback-section-item">
                            <div class="feedback-section-item-video">
                                <iframe
                                    src="https://player.vimeo.com/video/134723768?title=0&byline=0&portrait=0"
                                    frameborder="0"
                                    webkitallowfullscreen
                                    mozallowfullscreen
                                    allowfullscreen
                                ></iframe>
                            </div>
                            <div class="feedback-section-item-title">Петро та Марія</div>
                            <div class="feedback-section-item-date">12. 04. 2021</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feedback-section-item">
                            <div class="feedback-section-item-video">
                                <iframe
                                    src="https://player.vimeo.com/video/134723768?title=0&byline=0&portrait=0"
                                    frameborder="0"
                                    webkitallowfullscreen
                                    mozallowfullscreen
                                    allowfullscreen
                                ></iframe>
                            </div>
                            <div class="feedback-section-item-title">Петро та Марія</div>
                            <div class="feedback-section-item-date">12. 04. 2021</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feedback-section-item">
                            <div class="feedback-section-item-video">
                                <iframe
                                    src="https://player.vimeo.com/video/134723768?title=0&byline=0&portrait=0"
                                    frameborder="0"
                                    webkitallowfullscreen
                                    mozallowfullscreen
                                    allowfullscreen
                                ></iframe>
                            </div>
                            <div class="feedback-section-item-title">Петро та Марія</div>
                            <div class="feedback-section-item-date">12. 04. 2021</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEEDBACKS SECTION END -->
<!-- FORM SECTION START -->
<section id="form-section" class="form-section section container">
    <div class="form-section-inner">
        <h2 class="form-section-title">Почніть танцювати вже сьогодні!</h2>
        <p id="order-form-feedback" class="form-section-feedback">
            <span class="success">Дякуєм, наш менеджер звʼяжеться з вами</span>
            <span class="fail">Виникла помилка, спробуйте ще раз</span>
            <span class="default"
            >Залиште свої дані і ми зв’яжемось з вами впродовж дня.</span
            >
        </p>
        <form
            action="{{ route('order_new') }}"
            method="post"
            id="order-form"
            class="form-section-form"
        >
            @csrf
            <div class="input-field-container">
                <input
                    class="input-field"
                    data-len
                    id="field-name"
                    name="name"
                    type="text"
                    required
                    minlength="2"
                />
                <label for="field-name" class="input-field-label">
                    <span class="input-field-text">Ім’я та прізвище</span>
                </label>
            </div>
            <div class="input-field-container">
                <input
                    class="input-field"
                    data-len
                    id="field-phone"
                    name="phone"
                    type="tel"
                    required
                    pattern="^\+?3?8?(0\d{9})$"
{{--                    placeholder="+380971234567"--}}
                />
                <label for="field-phone" class="input-field-label">
                    <span class="input-field-text">Номер телефону</span>
                </label>
            </div>
            <input
                id="field-training-program"
                type="hidden"
                name="product_id"
            />
            <button class="btn btn-primary btn-lg">Записатись</button>
        </form>
    </div>
</section>
<!-- FORM SECTION END -->
<!-- MAP START -->
<section class="map-section">
    <div id="map" class="map-section-map"></div>
    <script
        async
        defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_MAP_KEY&callback=initMap"
    ></script>
</section>
<!-- MAP END -->
<!-- FOOTER START -->
@include('home.footer')
<!-- FOOTER END -->
<script src="dist/index.js"></script>
</body>
</html>
