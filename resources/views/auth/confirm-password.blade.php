@extends('auth.master')

@section('page-title')
{{ __('Confirm your password before continuing') }}
@endsection

@section('card-title')
{{ __('Confirm your password before continuing') }}
@endsection

@section('page-content')

<div class="mb-4 text-sm text-center text-slate-800">
    {{ __('This is a secure area of the application. Please confirm your password before continuing') . '.' }}
</div>

<form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
    @csrf
    <div>
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input type="password" name="password" id="password" required class="form-input">
        @error('password')
            <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn-primary">
        {{ __('Confirm') }}
    </button>
</form>

@endsection