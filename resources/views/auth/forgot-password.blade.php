@extends('auth.master')

@section('page-title')
{{ __('Recover password') }}
@endsection

@section('card-title')
{{ __('Recover password') }}
@endsection

@section('page-content')

<div class="mb-4 text-sm text-center text-slate-800">
    {{ __('We will send a link to the email address you provide so that you can reset your password') }}
</div>

<form method="POST" action="{{ route('password.email') }}" class="space-y-4">
    @csrf
    <div>
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="form-input">
        @error('email')
            <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn-primary">
        {{ __('Send mail') }}
    </button>
</form>

<div class="mt-6 text-center">
    <a href="{{ route('login') }}" class="link-primary">{{ __('Back to login') }}</a>
</div>

@endsection
