@extends('auth.master')

@section('page-title')
{{ __('Log in') }}
@endsection

@section('card-title')
{{ __('Log in') }}
@endsection

@section('page-content')

<form method="POST" action="{{ route('login') }}" class="space-y-4">
    @csrf
    <div>
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-input">
    </div>

    <div>
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" name="password" required class="form-input">
    </div>

    <div class="flex items-center justify-between text-sm">
        <label class="flex items-center cursor-pointer">
            <input type="checkbox" name="remember">
            <span class="ml-2 text-slate-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <button type="submit" class="btn-primary">
        {{ __('Log in') }}
    </button>
</form>

@if (Route::has('password.request'))
<div class="mt-6 text-center">
    <a href="{{ route('password.request') }}" class="link-primary">{{ __('Forgot your password?') }}</a>
</div>
@endif

@endsection
