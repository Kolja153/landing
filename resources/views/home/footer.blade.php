<footer class="footer">
    <div class="container footer-inner">
        <div class="footer-copy">
            <p>
                Студія весільного танцю "FedanStudio" м. Львів, пр. Чорновола 45а 6 корпус
            </p>
        </div>
        <div class="footer-social">
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
        </div>
    </div>
</footer>
