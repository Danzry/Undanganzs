<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Log in</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                Don't have an account yet?
                <a class="font-medium text-blue-600 decoration-2 hover:underline dark:text-blue-500"
                    href="{{ route('register') }}" wire:navigate>
                    Register here
                </a>
            </p>
        </div>

        <x-validation-errors class="my-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-ts-input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-ts-password id="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center w-2/6 flex-start">
                    <x-ts-checkbox sm color="blue" id="remember_me" name="remember"/>
                    <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-blue-600 decoration-2 hover:underline dark:text-blue-500"
                        href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div
            class="flex items-center py-3 text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
            Or
        </div>

        <div class="flex justify-center">
            <div class="grid grid-cols-2 gap-x-3">
                <a href="/socialite/google" class="px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-google" viewBox="0 0 16 16">
                        <path
                            d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                    </svg>
                </a>
                <a href="/socialite/facebook" class="px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                </a>
            </div>
        </div>

    </x-authentication-card>
</x-guest-layout>
