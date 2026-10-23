@extends('auth.master')

@section('page-title')
{{ __('Verify email') }}
@endsection

@section('card-title')
{{ __('Verify email') }}
@endsection

@section('page-content')

<div class="mb-4 text-sm text-center text-slate-800">
    {{ __('We have sent you a verification link. Click on it to activate your account, or request a new one if you didn\'t receive it') . '.' }}
</div>

@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
@endif

<div class="mt-6 flex flex-row gap-4 justify-center">
    <form method="POST" action="{{ route('verification.send') }}" class="w-full">
        @csrf
        <button type="submit" class="btn-primary w-full">
            {{ __('Resend verification email') }}
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="w-full">
        @csrf
        <button type="submit" class="btn-secondary w-full">
            {{ __('Log out') }}
        </button>
    </form>
</div>

@endsection