@component('vendor.mail.html.message')
{{-- @component('mail::message') --}}
{{-- # {{ $details['title'] }} --}}
  
The body of your message. 
   
@component('mail::button', ['url' => 'testUrl'])
{{-- @component('mail::button', ['url' => $details['url']]) --}}
Button Text
@endcomponent

Thanks,

{{ config('app.name') }}

@component('mail::footer')
Test Foolter
@endcomponent

@endcomponent