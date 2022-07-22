<div class="header-box">
    <a href="{{ $url }}" class="header-logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
        {{ $slot }}
    </a>
    <div class="bitcoin-logo">
        <img src="{{ asset('images/bitcoin-logo.png') }}" alt="bitcoin-logo">
    </div>
    <div class="hero">
        <img src="{{ asset('images/hero-bg.png') }}" alt="hero-bg">
    </div>
    <div class="connections">
        <img src="{{ asset('images/connections.png') }}" alt="connections">
    </div>
</div>