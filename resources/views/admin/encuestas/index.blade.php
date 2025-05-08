<x-layouts.administrarum>
    <div class="mb-4 flex justify-between items-center text-xs">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Encuestas</flux:breadcrumbs.item>
        </flux:breadcrumbs>
        <a href="{{ route('admin.encuestas.create') }}" class="btn btn-blue">+ Nueva Encuesta</a>
    </div>

    <div class="relative overflow-x-auto bg-white shadow rounded-lg">
        <table class="w-full text-sm text-left text-gray-600">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th class="px-4 py-3">Clave</th>
                    <th class="px-4 py-3">Periodo</th>
                    <th class="px-4 py-3">Estado</th>
                    <th class="px-4 py-3">Inicio</th>
                    <th class="px-4 py-3">Cierre</th>
                    <th class="px-4 py-3">Tipo</th>
                    <th class="px-4 py-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($encuestas as $encuesta)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $encuesta->cv_encuesta }}</td>
                    <td class="px-4 py-2">{{ $encuesta->periodo }}</td>
                    <td class="px-4 py-2">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium 
                            {{ $encuesta->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-700' }}">
                            {{ $encuesta->is_active ? 'Activa' : 'Inactiva' }}
                        </span>
                    </td>
                    <td class="px-4 py-2">
                        {{ \Carbon\Carbon::parse($encuesta->fecha_inicio)->format('d/m/Y') }} 
                        <span class="text-xs text-gray-500">({{ $encuesta->hora_inicio }})</span>
                    </td>
                    <td class="px-4 py-2">
                        {{ \Carbon\Carbon::parse($encuesta->fecha_cierre)->format('d/m/Y') }} 
                        <span class="text-xs text-gray-500">({{ $encuesta->hora_cierre }})</span>
                    </td>
                    <td class="px-6 py-4">
                        {{ $encuesta->tipo_encuesta->nombre }}
                    </td>
                    <td class="px-4 py-2 text-center">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('admin.general.respuestas', $encuesta) }}" class="btn text-white bg-[#00c014] text-xs">Respuestas</a>
                            <a href="{{ route('admin.general.indicadores', $encuesta) }}" class="btn text-white bg-[#00c014] text-xs">Indicadores</a>
                            <a href="{{ $encuesta->cv_tipo_encuesta === 1 
                                ? route('admin.general.graficas', $encuesta) 
                                : route('admin.quibio.graficas', $encuesta) }}" 
                                class="btn text-white bg-[#b900fa] text-xs">
                                    Gráficas
                            </a>
                            {{-- Mostrar solo si el usuario tiene el rol dba --}}
                            @if(auth()->user()->hasRole('dba'))
                                <a href="{{ route('admin.encuestas.edit', $encuesta) }}" class="btn btn-blue text-xs">Editar</a>
                                <form action="{{ route('admin.encuestas.destroy', $encuesta) }}" method="POST" class="delete-form">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-red text-xs">Eliminar</button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">No hay encuestas registradas.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $encuestas->links() }}
    </div>

    @push('js')
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡El registro se eliminará permanentemente!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Cancelar",
                    confirmButtonText: "Sí, eliminar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    @endpush
</x-layouts.administrarum>
