@component('vendor.mail.html.message')
{{-- @component('mail::message') --}}
{{-- # {{ $details['title'] }} --}}
  
{{-- {{ $details['content'] }} --}}
   
@component('mail::button', ['url' => 'https://google.com'])
{{-- @component('mail::button', ['url' => $details['url']]) --}}
Confirm
@endcomponent

{{-- Thanks, --}}

{{-- {{ config('app.name') }} --}}

@component('mail::footer')
@endcomponent

@endcomponent