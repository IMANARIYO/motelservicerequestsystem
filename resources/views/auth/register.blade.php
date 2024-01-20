<x-guest-layout>

    <x-auth-card>
        
        <x-slot name="logo">
            <!-- You can customize the logo or use text -->
            M.S.R.S
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required />
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-end mt-6">
                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

        <!-- Already Registered Link -->
        <div class="mt-4 text-sm text-gray-600">
            {{ __('Already registered?') }} <a class="underline text-gray-900" href="{{ route('login') }}">{{ __('Login here.') }}</a>
        </div>
    </x-auth-card>
</x-guest-layout>
