@component('vendor.mail.html.master')
{{-- Header --}}
@slot('header')
@component('vendor.mail.html.header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}



<form method="POST" action="{{ route('sendMail') }}">
    @csrf
    <div class="form-content">
        <textarea name="content" rows="4" cols="50">
        At w3schools.com you will learn how to make a website. 
        </textarea>
    </div>
    <div class="button-box">
        <button type="submit" class="button button-primary">
            Send Mail
        </button>
    </div>
    </div>
</form>



<div class="box-content">
    Hi Nguyen, 

I hope you are having fun using FUINRE!

As we are continuously improving and adding new features to FUINRE, your feedback/suggestions will help us understand the challenges and opportunities you face so we can priorities the tools and services that will help you best.

This survey should take less than 5 minutes to complete and your responses will be kept confidential. 

We appreciate your time and thank you for helping us improve FUINRE
.

Cheers,
Ngoc Hai, Product Manager
</div>
{{ $slot ?? '' }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('vendor.mail.html.subcopy')
{{ $subcopy ?? '' }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('vendor.mail.html.footer')
{{-- © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.') --}}
@endcomponent
@endslot
@endcomponent
