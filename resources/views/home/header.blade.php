<header class="header-mobile-social">
    <div class="container header-mobile-social-inner">
        <ul class="header-social">
            <li>
                <a href="https://www.facebook.com/FedanStudio" class="icon-facebook"></a>
            </li>
            <li>
                <a href="https://www.instagram.com/fedanstudio" class="icon-instagram"></a>
            </li>
        </ul>
        <a class="header-mobile-social-tel" href="{{  $company_info['phone']['value'] ?? '' }}"
        >{{ $company_info['phone']['value'] ?? '' }}</a
        >
    </div>
</header>
<header class="header-desctop">
    <div class="container header-inner">
        <a href="#" class="header-logo">
            <img src="./dist/images/logo.png" alt="Fedan studio logo"/>
            <h1>Fedan studio</h1>
        </a>

        @if( isset($company_info['phone']))
        <a class="header-tel" href="tel:{{  $company_info['phone']['value'] }}">
            {{  $company_info['phone']['value'] }}
        </a>
        @endif

        <ul class="header-social">

            @if( isset($company_info['facebook']))
                <li>
                    <a href="{{  $company_info['facebook']['value'] }}" class="icon-facebook"></a>
                </li>
            @endif

            @if( isset($company_info['instagram']))
                <li>
                    <a href="{{  $company_info['instagram']['value'] }}" class="icon-instagram"></a>
                </li>
            @endif

        </ul>
        <a href="#form-section" type="button" class="btn btn-primary"
        >Записатись</a
        >
    </div>
</header>
