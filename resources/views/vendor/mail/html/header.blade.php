{{-- <tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr> --}}

<div class="header-box">
    <a href="#" class="header-logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </a>
    <div class="bitcoin-logo">
        <img src="{{ asset('images/bitcoin-logo.png') }}" alt="">
    </div>
    <div class="hero">
        <img src="{{ asset('images/hero-bg.png') }}" alt="">
    </div>
</div>