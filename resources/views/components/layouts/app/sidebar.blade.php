@php
    $user = auth()->user();
    $links = [];

    if ($user->hasRole('DBA')) {
        $links[] = [
            'name' => 'Avisos',
            'icon' => 'chat-bubble-left-ellipsis',
            'url' => route('admin.avisos.index'),
            'current' => request()->routeIs('admin.avisos.*')
        ];
        $links[] = [
            'name' => 'Egresados',
            'icon' => 'academic-cap',
            'url' => route('admin.egresados.index'),
            'current' => request()->routeIs('admin.egresados.*')
        ];
        $links[] = [
            'name' => 'Administradores',
            'icon' => 'key',
            'url' => route('admin.admins.index'),
            'current' => request()->routeIs('admin.admins.*')
        ];
        $links[] = [
            'name' => 'Encuestas',
            'icon' => 'pencil-square',
            'url' => route('admin.encuestas.index'),
            'current' => request()->routeIs('admin.encuestas.*')
        ];
    }
    if ($user->hasRole('jefe_de_departamento')) {
        $links[] = [
            'name' => 'Avisos',
            'icon' => 'chat-bubble-left-ellipsis',
            'url' => route('admin.avisos.index'),
            'current' => request()->routeIs('admin.avisos.*')
        ];
        $links[] = [
            'name' => 'Egresados',
            'icon' => 'academic-cap',
            'url' => route('admin.egresados.index'),
            'current' => request()->routeIs('admin.egresados.*')
        ];
        $links[] = [
            'name' => 'Encuestas',
            'icon' => 'pencil-square',
            'url' => route('admin.encuestas.index'),
            'current' => request()->routeIs('admin.encuestas.*')
        ];
    }
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        {{-- stack para el editor de texto enrequesido --}}
        @stack('css')
        @include('partials.head')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            @livewireStyles
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800 h-screen">
        <flux:sidebar sticky stashable class="border-r border-zinc-200 bg-[#014E82] dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
@livewireScripts
            <a href="{{ route('dashboard') }}" class="mr-5 flex items-center space-x-2" wire:navigate>
                <x-app-logo />
            </a>
            <flux:navlist variant="outline">
                <flux:navlist.group heading="Panel" class="grid">
                    @foreach ($links as $link)
                        <flux:navlist.item icon="{{ $link['icon'] }}" :href="$link['url']" :current="$link['current']" wire:navigate>
                            <span class="text-white"> {{ $link['name'] }} </span>
                        </flux:navlist.item>
                    @endforeach
                </flux:navlist.group>
            </flux:navlist>
            <flux:spacer/>
            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />
                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-white dark:bg-neutral-700 dark:text-white">
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>                                
                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />
                    <flux:menu.radio.group>
                        <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />                    
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
            <img class="mr-4 w-22 h-14 sm:w-[160px] md:w-[160px]  lg:w-[160px]  xl:w-[160px]" src="{{ asset('img/logotecnmblanco.png') }}" alt="logo">
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden bg-[#014E82]">
            <flux:sidebar.toggle class="lg:hidden bg-[#014E82]" icon="bars-2" inset="left" />
            <flux:spacer />
            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />
                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-white dark:bg-neutral-700 dark:text-white">
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>
                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibol">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>
                    <flux:menu.separator />
                    <flux:menu.radio.group>
                        <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.separator />
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
        @stack('js')
    </body>
</html>
