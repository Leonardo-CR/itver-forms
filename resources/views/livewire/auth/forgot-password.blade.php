<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;


new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';
    public $recaptcha;

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
            'recaptcha' => ['required', 'captcha'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('A reset link will be sent if the account exists.'));
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email Address')"
            type="email"
            required
            autofocus
            placeholder="email@example.com"
        />
        <div wire:ignore>
            {!! NoCaptcha::renderJS() !!}
            {!! NoCaptcha::display(['data-callback' => 'onCallback']) !!}
        </div>

    @error('recaptcha')
        <div class="text-red-500 text-sm mt-2">
            {{ $message }}
        </div>
        
    @enderror

        <flux:button variant="primary" type="submit" class="w-full">{{ __('Email password reset link') }}</flux:button>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-400">
        {{ __('Or, return to') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('log in') }}</flux:link>
    </div>
    <script>
    var onCallback = function () {
        @this.set('recaptcha', grecaptcha.getResponse());
    };
</script>
</div>
