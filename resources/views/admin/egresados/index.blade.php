<x-layouts.administrarum >
    <div class="mb-4 flex justify-between items-left text-xs">
        <flux:breadcrumbs >
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item >Egresados</flux:breadcrumbs.item>
        </flux:breadcrumbs>
        {{-- <a href="{{ route('admin.egresados.create') }}" class="btn btn-blue">Nuevo</a> --}}
    </div>
    <form method="GET" action="{{ route('admin.egresados.index') }}" class="mb-4 flex flex-wrap gap-2 items-center">
        <input type="text" name="nombre" value="{{ request('nombre') }}" placeholder="Buscar por nombre" class="border border-gray-300 rounded px-2 py-1 text-sm">
        <input type="text" name="email" value="{{ request('email') }}" placeholder="Buscar por correo" class="border border-gray-300 rounded px-2 py-1 text-sm">
        <select name="verificado" class="border border-gray-300 rounded px-2 py-1 text-sm">
            <option value="">Todos</option>
            <option value="1" {{ request('verificado') == '1' ? 'selected' : '' }}>Verificado</option>
            <option value="0" {{ request('verificado') == '0' ? 'selected' : '' }}>No verificado</option>
        </select>
        <button type="submit" class="btn btn-blue text-xs">Filtrar</button>
    </form>
    
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    
                    <th scope="col" class="px-6 py-3">Correo Electrónico</th>
                    <th scope="col" class="px-6 py-3">Carrera</th>
                    <th scope="col" class="px-6 py-3">Verificado</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($egresados as $egresado)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">
                        {{ $egresado->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->carrera->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($egresado->email_verified_at)
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">
                                Verificado
                            </span>
                        @else
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">
                                No verificado
                            </span>
                        @endif
                    </td>
                    
                    <td class="px-6 py-4" width="10px">
                        <div class="flex space-x-2">
                            <!-- Boton Editar -->
                            <a href="{{ route('admin.egresados.edit', $egresado) }}" class="btn btn-blue text-xs ">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>    
                            </a> 
                            <form class="delete-form" action="{{ route('admin.egresados.destroy',$egresado) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- Boton Borrar -->
                                <button class="btn btn-red text-xs">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $egresados->links() }}
    </div>
        {{-- Referenciamos el espacio que se creo en resource/views/components/app.blade
        @push('js')
            <script>
                forms = document.querySelectorAll('.delete-form');
    
                forms.forEach(form => {
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
    
                        Swal.fire({
                            title: "¿Estás seguro?",
                            text: "¡El registro se eliminara para siempre!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            cancelButtonText: "Cancelar",
                            confirmButtonText: "Si, eliminalo!"
                            }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                                
                            }
                            });
    
                    });
                });
    
            </script>
        @endpush --}}
</x-layouts.administrarum>
