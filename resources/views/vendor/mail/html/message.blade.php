@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
@endcomponent
@endslot

{{-- Body --}}
<div class="box-content">
{{$details['content']}}
</div>
@component('mail::button', ['url' => $details['url_confirm'], 'color' => 'primary'])
    Confirm
@endcomponent

{{-- {{ $slot }} --}}
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
    {{-- content footer--}}
@endcomponent
@endslot
@endcomponent
