
<footer class="footer">
    <div class="footer-contact">
        <div class="hr">
            <div class="footer-logo">
                <a href="{{ config('app.url') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="footer-social">
            <a href="{{ config('app.url_instagram') }}">
                <img src="{{ asset('images/bi_instagram.png') }}" alt="">
            </a>
            <a href="{{ config('app.url_twitte') }}">
                <img src="{{ asset('images/akar-icons_twitter-fill.png') }}" alt="">
            </a>
            <a href="{{ config('app.url_facebook') }}">
                <img src="{{ asset('images/fa-brands_facebook-f.png') }}" alt="">
            </a>
            <a href="{{ config('app.url_linkedin') }}">
                <img src="{{ asset('images/brandico_linkedin.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="footer-address">
        <div class="footer-address-left">
            <div class="address-box">
                <p>Ha Noi City</p>
                <p>Floor 4th, 66 Tran Dai Nghia street, Hai Ba Trung district, Hanoi</p>
            </div>
        </div>
        <div class="footer-address-right">
            <div class="address-box">
                <p>Ho Chi Minh City</p>
                <p>21Bis Hau Giang, Ward 4, Tan Binh District, HCM</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p><span class="d-block">Copyright © 2021 Fuinre Company</span>You received this email because you have subscribed to receive promotional information or purchased products from Fuinre.</p>
        {{-- {{ Illuminate\Mail\Markdown::parse($slot) }} --}}
    </div>
</footer>
