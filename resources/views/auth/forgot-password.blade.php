<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot Password</h1>
        </div>

        <div class="my-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-ts-input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a class="text-sm font-medium text-blue-600 decoration-2 hover:underline dark:text-blue-500"
                    href="{{ route('login') }}" wire:navigate>
                    {{ __('Log in') }}
                </a>
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
