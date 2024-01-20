<style>
    .auth-card {
        max-width: 24rem;
        margin: 2rem auto;
        padding: 2rem;
        border: 1px solid #ccc;
        border-radius: 0.375rem;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .auth-card a {
        text-decoration: none;
    }

    .auth-card label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #374151;
    }

    .auth-card input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.375rem;
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .auth-card input:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
    }

    .auth-card checkbox {
        margin-right: 0.5rem;
    }

    .auth-card button {
        background-color: #2563eb;
        color: #fff;
        padding: 0.75rem 1rem;
        border: none;
        border-radius: 0.375rem;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s;
    }

    .auth-card button:hover {
        background-color: #1c4fc6;
    }

    .auth-card .forgot-password {
        font-size: 0.875rem;
        color: #64748b;
        text-decoration: none;
        transition: color 0.3s;
    }

    .auth-card .forgot-password:hover {
        color: #3b3f46;
    }
</style>

<x-guest-layout>
    <div class="auth-card">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="mt-8">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mb-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button>
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
