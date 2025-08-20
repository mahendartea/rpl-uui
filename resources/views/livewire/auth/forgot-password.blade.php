<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('A reset link will be sent if the account exists.'));
    }
}; ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-900">Lupa Password</h2>
        <p class="mt-2 text-sm text-gray-600">Masukkan email Anda untuk menerima link reset password</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="sendPasswordResetLink" class="space-y-6">
        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Alamat Email
            </label>
            <input wire:model="email" id="email" type="email" required autofocus placeholder="email@example.com"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm @error('email') border-red-300 @enderror" />
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300">
                Kirim Link Reset Password
            </button>
        </div>
    </form>

    <!-- Back to Login -->
    <div class="text-center pt-4 border-t border-gray-200">
        <p class="text-sm text-gray-600">
            Atau kembali ke
            <a href="{{ route('login') }}" class="font-medium text-red-600 hover:text-red-500 transition duration-300"
                wire:navigate>
                halaman login
            </a>
        </p>
    </div>
</div>
