<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email) . '|' . request()->ip());
    }
}; ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-900">Masuk ke Akun Anda</h2>
        <p class="mt-2 text-sm text-gray-600">Masukkan email dan password untuk mengakses portal RPL</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="login" class="space-y-6">
        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Alamat Email
            </label>
            <input wire:model="email" id="email" type="email" required autofocus autocomplete="email"
                placeholder="email@example.com"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm @error('email') border-red-300 @enderror" />
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between mb-2">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-sm text-red-600 hover:text-red-500 transition duration-300" wire:navigate>
                        Lupa password?
                    </a>
                @endif
            </div>
            <input wire:model="password" id="password" type="password" required autocomplete="current-password"
                placeholder="Masukkan password"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm @error('password') border-red-300 @enderror" />
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input wire:model="remember" id="remember" type="checkbox"
                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded" />
            <label for="remember" class="ml-2 block text-sm text-gray-700">
                Ingat saya
            </label>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300">
                Masuk
            </button>
        </div>
    </form>

    <!-- Register Link -->
    @if (Route::has('register'))
        <div class="text-center pt-4 border-t border-gray-200">
            <p class="text-sm text-gray-600">
                Belum punya akun RPL?
                <a href="{{ route('register') }}"
                    class="font-medium text-red-600 hover:text-red-500 transition duration-300" wire:navigate>
                    Daftar sekarang
                </a>
            </p>
        </div>
    @endif
</div>
