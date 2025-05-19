<x-layouts.administrarum>
    <div class="mb-4 flex justify-between items-center text-xs">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Encuestas</flux:breadcrumbs.item>
        </flux:breadcrumbs>
         {{-- Link Importacion --}}
        <div  class="btn btn-blue">
        <form action="{{ route('admin.encuestas.importar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="archivo" required  accept=".xlsx">
            <button type="submit">Importar Encuestas</button>
        </form>
        </div>
         {{-- Link para exportar --}}
        <a href="{{ route('admin.encuestas.exportar') }}" class="btn btn-blue">
            <button>Exportar Avisos</button>
        </a>
        <a href="{{ route('admin.encuestas.create') }}" class="btn btn-blue">+ Nueva Encuesta</a>
    </div>
    
    <div class="py-2 flex flex-col md:flex-row space-y-4">
    @if ($mostrarGenerales)
        <!-- Formulario de encuestas Generales -->
        <form action="{{ route('graficas.reporte_generales_n') }}" method="GET" class="max-w-md mx-auto p-4 bg-white rounded shadow">
            <p class="font-bold pb-2 dark:text-black">Graficar encuestas Generales</p>
            <label for="encuestas" class="block text-gray-700 font-semibold mb-2">
                Clave de encuestas <span class="text-sm text-gray-500">(separadas por comas)</span>:
            </label>
            <input type="text" name="encuestas" id="encuestas" placeholder="Ej: 1,3,5"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mb-4 dark:text-black" />
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">
                Generar gráfico
            </button>
        </form>
    @endif

    @if ($mostrarQuibio)
        <!-- Formulario de encuestas Quibio -->
        <form action="{{ route('graficas.reporte_quibio_n') }}" method="GET" class="max-w-md mx-auto p-4 bg-white rounded shadow md:ml-4">
            <p class="font-bold pb-2 dark:text-black">Graficar encuestas Quibio</p>
            <label for="encuestas" class="block text-gray-700 font-semibold mb-2">
                Clave de encuestas <span class="text-sm text-gray-500">(separadas por comas)</span>:
            </label>
            <input type="text" name="encuestas" id="encuestas" placeholder="Ej: 1,3,5"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mb-4 dark:text-black" />
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">
                Generar gráfico
            </button>
        </form>
    @endif
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
                            <!-- Boton Respuestas -->
                            <a href="{{ route('admin.general.respuestas', $encuesta) }}" class="btn text-white bg-[#00c014] text-xs">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                            </a>
                            <!-- Boton Indicadores -->
                            <a href="{{ route('admin.general.indicadores', $encuesta) }}" class="btn text-white bg-[#00c014] text-xs">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </a>
                            <a href="{{ $encuesta->cv_tipo_encuesta === 1 
                                ? route('admin.general.graficas', $encuesta) 
                                : route('admin.quibio.graficas', $encuesta) }}" 
                                class="btn text-white bg-[#b900fa] text-xs"> <!-- Boton Gráficas -->
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                            </a>
                            {{-- Mostrar solo si el usuario tiene el rol DBA --}}
                            <div class="flex space-x-2">
                                @if(auth()->user()->hasRole('DBA'))
                                    <!-- Boton Editar -->
                                    <a href="{{ route('admin.encuestas.edit', $encuesta) }}" class="btn btn-blue text-xs"> 
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.encuestas.destroy', $encuesta) }}" method="POST" class="delete-form">
                                        @csrf @method('DELETE')
                                        <!-- Boton Borrar -->
                                        <button type="submit" class="btn btn-red text-xs"> 
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
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
