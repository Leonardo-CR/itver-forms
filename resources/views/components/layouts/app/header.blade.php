@php
    $user = auth()->user();

    $links = [];

    if ($user->hasRole('dba') || $user->hasRole('jefe_de_departamento')) {
        $links[] = [
            'name' => 'Avisos',
            'icon' => 'inbox',
            'url' =>  route('avisos'),
            'current' => request()->routeIs('avisos.*'),
        ];
        $links[] = [
            'name' => 'Bienvenida',
            'icon' => 'home',
            'url' =>  route('egresado.bienvenida'),
            'current' => request()->routeIs('egresado.bienvenida.*'),
        ];
        $links[] = [
            'name' => 'Instrucciones',
            'icon' => 'clipboard-document-list',
            'url' =>  route('egresado.instrucciones'),
            'current' => request()->routeIs('egresado.instrucciones.*'),
        ];
        $links[] = [
            'name' => 'Encuesta',
            'icon' => 'academic-cap',
            'url' =>  route('egresado.encuesta'),
            'current' => request()->routeIs('egresado.encuesta.*'),
        ];
        $links[] = [
            'name' => 'Encuesta QuiBio',
            'icon' => 'academic-cap',
            'url' =>  route('quibio.encuesta'),
            'current' => request()->routeIs('quibio.*'),
        ];
        $links[] = [
            'name' => 'Panel Administrativo',
            'icon' => 'presentation-chart-line',
            'url' =>  route('admin.avisos.index'),
            'current' => request()->routeIs('quibio.*'),
        ];
    }

    if ($user->hasRole('egresado_general')) {
        $links[] = [
            'name' => 'Bienvenida',
            'icon' => 'home',
            'url' =>  route('egresado.bienvenida'),
            'current' => request()->routeIs('egresado.bienvenida.*'),
        ];
        $links[] = [
            'name' => 'Instrucciones',
            'icon' => 'clipboard-document-list',
            'url' =>  route('egresado.instrucciones'),
            'current' => request()->routeIs('egresado.instrucciones.*'),
        ];
        $links[] = [
            'name' => 'Encuesta',
            'icon' => 'academic-cap',
            'url' =>  route('egresado.encuesta'),
            'current' => request()->routeIs('egresado.encuesta.*'),
        ];
        $links[] = [
            'name' => 'Avisos',
            'icon' => 'inbox',
            'url' =>  route('avisos'),
            'current' => request()->routeIs('avisos.*'),
        ];
    }

    if ($user->hasRole('egresado_quibio')) {
        
        $links[] = [
            'name' => 'Bienvenida',
            'icon' => 'home',
            'url' =>  route('egresado.bienvenida'),
            'current' => request()->routeIs('egresado.bienvenida.*'),
        ];
        $links[] = [
            'name' => 'Instrucciones',
            'icon' => 'clipboard-document-list',
            'url' =>  route('egresado.instrucciones'),
            'current' => request()->routeIs('egresado.instrucciones.*'),
        ];
        $links[] = [
            'name' => 'Encuesta QuiBio',
            'icon' => 'academic-cap',
            'url' =>  route('quibio.encuesta'),
            'current' => request()->routeIs('quibio.*'),
        ];
        $links[] = [
            'name' => 'Avisos',
            'icon' => 'inbox',
            'url' =>  route('avisos'),
            'current' => request()->routeIs('avisos.*'),
        ];
    }
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </head>
    {{-- CDN de Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <body class="min-h-screen bg-[#0569ab] dark:bg-zinc-800">
        <flux:header class="border-b border-zinc-200 bg-[#014E82] dark:border-zinc-700 dark:bg-[#014E82] pt-2" >
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
            {{-- Logo y titulo --}}
            <a href="{{ route('dashboard') }}" class="ml-2 mr-5 flex items-center space-x-2 lg:ml-0" wire:navigate>
                <img class="mr-4 w-22 h-14 sm:w-[130px] md:w-[150px]  lg:w-[155px]  xl:w-[160px]" src="{{ asset('img/logotecnmblanco.png') }}" alt="logo">
                <img class="mr-4 w-22 h-14 sm:w-[80px] md:w-[80px] lg:w-[80px] xl:w-[80px]" src="{{ asset('img/logoitv.png') }}">
                <x-app-logo />
            </a>
            {{-- Menu y links --}}
            <flux:navbar class=" max-lg:hidden text-white">
                @foreach ($links as $link)
                <flux:navbar.item icon="{{ $link['icon'] }}" href="{{ $link['url'] }}" current="{{ $link['current'] }}"  wire:navigate>
                    <span class="text-white"> {{ $link['name'] }} </span>
                </flux:navbar.item>
                @endforeach
            </flux:navbar>

            <flux:spacer />
            <!-- Desktop User Menu -->
            <flux:dropdown position="top" align="end">
                <flux:button
                    class="cursor-pointer"
                    icon="user"
                />
                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
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
        </flux:header>

        <!-- Mobile Menu -->
        <flux:sidebar stashable sticky class="lg:hidden border-r border-zinc-200 bg-[#014E82] dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
            <a href="{{ route('dashboard') }}" class="ml-1 flex items-center space-x-2" wire:navigate>
                <x-app-logo />
            </a>
            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Menú')">
                    @foreach ($links as $link)
                        <flux:navlist.item icon="{{ $link['icon'] }}" href="{{ $link['url'] }}" :current="$link['current']" wire:navigate>
                            <span class="text-white"> {{ $link['name'] }} </span>
                        </flux:navlist.item>
                    @endforeach
                </flux:navlist.group>
            </flux:navlist>
            <flux:spacer />
        </flux:sidebar>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
