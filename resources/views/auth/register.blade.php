@extends('auth.master')

@section('page-title')
{{ __('Register') }}
@endsection

@section('card-title')
{{ __('Register') }}
@endsection

@section('page-content')

<form method="POST" action="{{ route('register') }}" class="space-y-4">
    @csrf
    <div>
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus class="form-input" {{--  autocomplete="name" --}}>
        @error('name')
            <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
        {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
    </div>

    <div>
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required class="form-input">
        @error('email')
            <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
        {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
    </div>

    <div>
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" required class="form-input">
        @error('password')
            <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
    </div>

    <div>
        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="form-input">
        {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
    </div>

    <button type="submit" class="btn-primary">
        {{ __('Register') }}
    </button>
</form>

<div class="mt-6 text-center">
    <a href="{{ route('login') }}" class="link-primary">{{ __('Already registered?') }}</a>
</div>

@endsection
