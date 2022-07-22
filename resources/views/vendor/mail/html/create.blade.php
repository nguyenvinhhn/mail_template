@component('vendor.mail.html.master')
{{-- Header --}}
@slot('header')
@component('vendor.mail.html.header', ['url' => config('app.url')])
{{-- {{ config('app.name') }} --}}
@endcomponent
@endslot

{{-- Body --}}
<form name="myForm" method="POST" action="{{ route('sendMail') }}"  onsubmit="return validateForm()">
    <div class="form-content">
        @if(session()->has('message'))
        <div class="button-success alert">
            {{ session()->get('message') }}
        </div>
        @endif
    </div>
    @csrf
    <div class="form-content">
        <input type="text" name="email" placeholder="Enter email...">
        @error('email')
        <p class="text-danger">{{$errors->first('email')}}</p>
        @enderror
    </div>
    <div class="form-content">
        <textarea placeholder="Enter content email..." name="content" rows="4" cols="50"></textarea>
        @error('content')
        <p class="text-danger">{{$errors->first('content')}}</p>
        @enderror
    </div>
    <div class="button-box">
        <button type="submit" class="button button-primary">
            Send Mail
        </button>
    </div>
    </div>
</form>

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
