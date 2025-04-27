<x-layouts.administrarum >
    <div class="mb-4 flex justify-between items-left text-xs">
        <flux:breadcrumbs >
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item >Egresados</flux:breadcrumbs.item>
        </flux:breadcrumbs>
        <a href="{{ route('admin.egresados.create') }}" class="btn btn-blue">Nuevo</a>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Número de control</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Apellido Paterno</th>
                    <th scope="col" class="px-6 py-3">Apellido Materno</th>
                    <th scope="col" class="px-6 py-3">Correo Electrónico</th>
                    <th scope="col" class="px-6 py-3">Carrera</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($egresados as $egresado)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">
                        {{ $egresado->no_control }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->app }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->apm }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->correo }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $egresado->carrera->nombre }}
                    </td>
                    <td class="px-6 py-4" width="10px">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.egresados.edit', $egresado) }}" class="btn btn-blue text-xs ">Editar</a> 
                            <form class="delete-form" action="{{ route('admin.egresados.destroy',$egresado) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-red text-xs">Eliminar</button>
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
