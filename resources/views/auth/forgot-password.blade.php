<html>
    <title> Reset Password</title>
<style>
    div{        
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#b32d00, black);

    }
    body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background: linear-gradient(#0957e9, #e40518);
    }
    .mb-4{        
        font-size:16px;
        height:auto;
        background-image: linear-gradient(#11191a, black);

    }
    </style>
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
