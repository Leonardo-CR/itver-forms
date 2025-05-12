<x-layouts.administrarum>
    <div class="mb-4 flex justify-between items-center text-xs">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Encuestas</flux:breadcrumbs.item>
        </flux:breadcrumbs>
        <a href="{{ route('admin.encuestas.create') }}" class="btn btn-blue">+ Nueva Encuesta</a>
    </div>
    <script>
        // Acceso a los datos JSON
        const respuestas = @json($respuestasAgrupadas);
        console.log(respuestas);
        
        // Ejemplo: iterar sobre las respuestas
        for (const [pregunta, respuestas] of Object.entries(respuestas)) {
            console.log(`Pregunta: ${pregunta}`);
            for (const [respuesta, cantidad] of Object.entries(respuestas)) {
                console.log(`- ${respuesta}: ${cantidad} votos`);
            }
        }
    </script>
    <div class="overflow-x-auto rounded-lg shadow-md">
        <table class="min-w-full bg-white dark:bg-gray-800">
          <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
              <th colspan="2" class="py-3 px-6 text-left text-gray-700 dark:text-gray-300 font-semibold uppercase tracking-wider">Resultados de la Encuesta</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($respuestasAgrupadas as $pregunta => $respuestas)
              <tr class="bg-blue-50 dark:bg-gray-700">
                <td colspan="2" class="py-3 px-6 font-bold text-gray-800 dark:text-white">
                  <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-500 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    <span class="flex-grow">{{ $pregunta }}</span>
                    <!-- Boton Respuestas -->
                    <a href="{{ route('admin.general.respuestasDetalle', ['encuesta' => $encuesta, 'pregunta' => $respuestas[0]]) }}" class="btn text-white bg-[#00c014] text-xs">
                      <svg class="w-5 h-5 text-white" fill="none "stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
              @foreach($respuestas[1] as $respuesta => $cantidad)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                  <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-300">
                    <div class="flex items-center">
                      <div class="h-3 w-3 rounded-full bg-blue-500 mr-3"></div>
                      {{ $respuesta }}
                    </div>
                  </td>
                  <td class="py-4 px-6 border-b border-gray-200 dark:border-gray-700 text-right font-medium">
                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-blue-500 rounded-full">
                      {{ $cantidad }}
                    </span>
                  </td>
                </tr>
              @endforeach
            @endforeach
          </tbody>
          <tfoot class="bg-gray-50 dark:bg-gray-700 text-gray-500 dark:text-gray-400">
            <tr>
              <td colspan="2" class="py-3 px-6 text-sm text-center">
                Total de preguntas: {{ count($respuestasAgrupadas) }}
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
</x-layouts.administrarum>