<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Carrera;
use Database\Seeders\RoleSeeder;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreatedMail;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public $carreras;

    public string $cv_carrera = ''; // Variable para almacenar la carrera seleccionada

    public function mount()
    {
        // Obtener todas las carreras de la base de datos
        $this->carreras = Carrera::all();
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'cv_carrera' => ['required', 'exists:carrera,cv_carrera'], // Validar que exista en la tabla 'carreras' en la columna 'cv_carrera'
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        // Asignar rol basado en el ID de la carrera
        $quibioIds = [1, 2]; // <- aquí pon los IDs de química y bioquímica

        if (in_array((int)$this->cv_carrera, $quibioIds)) {
            $user->assignRole('egresado_quibio');
        } else {
            $user->assignRole('egresado_general');
        }

        Auth::login($user);
        //Mail::to('prueba@prueba.com')->send(new UserCreatedMail);
        //Mail::to($user->email)->send(new UserCreatedMail);
        $user->sendEmailVerificationNotification();


        $this->redirect(route('verification.notice'), navigate: true);// Redirigir a la página de verificación de correo electrónico

        //$this->redirectIntended(route('dashboard', absolute: false), navigate: true); // Redirigir a la página dashboard
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />
         {{-- <!-- Carrera (Seleccionar Carrera) -->
         <div class="relative">
            <label for="carrera" class="block text-sm font-medium text-gray-700">{{ __('Select your career') }}</label>

            <select required wire:model="cv_carrera" id="carrera" name="cv_carrera" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">{{ __('Choose a career') }}</option>
                @foreach ($carreras as $carrera)
                    <option value="{{ $carrera->cv_carrera }}">{{ $carrera->nombre }}</option>
                @endforeach
            </select>
        </div> --}}

        

        <flux:select wire:model="cv_carrera" id="carrera"
                 name="cv_carrera" 
                 placeholder="Selecciona la carrera de la cual egresaste:" 
                 label="Selecciona la carrera de la cual egresaste:" >
            @foreach ($carreras as $carrera)
            <flux:select.option value="{{  $carrera->cv_carrera }}">
                {{ $carrera->nombre }}
            </flux:select.option>
            @endforeach
        </flux:select>

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
