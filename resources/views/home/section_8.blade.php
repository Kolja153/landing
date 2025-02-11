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
