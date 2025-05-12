<x-layouts.administrarum>
    <div class="mb-4 flex justify-between items-center text-xs">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Encuestas</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </div>
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 px-4 py-2 bg-blue-50 dark:bg-gray-800 rounded-lg">
  {{ $pregunta->descripcion }}
</h2>

<div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
  <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Respuestas</h3>
  </div>
  <div class="divide-y divide-gray-200 dark:divide-gray-700">
    @for ($i = 0; $i < count($respuestas); $i++)
      <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
        <div class="flex items-start space-x-4">
          <!-- Avatar del usuario -->
          <div class="flex-shrink-0">
            <div class="h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 font-medium">
              {{ substr($usuarios[$i]->name, 0, 1) }}
            </div>
          </div>
          <!-- Contenido -->
          <div class="flex-1 min-w-0">
            <div class="flex justify-between items-baseline">
              <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                {{ $usuarios[$i]->name }}
              </p>
              <span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                {{ $usuarios[$i]->carrera->nombre }}
              </span>
            </div>
            
            <p class="mt-2 text-gray-600 dark:text-gray-300">
              <span class="font-medium text-blue-600 dark:text-blue-400">Respondió:</span> 
              <span class="ml-2 bg-blue-50 dark:bg-gray-700 px-3 py-1 rounded-lg inline-block">
                {{ $respuestas[$i]->valor }}
              </span>
            </p>
          </div>
        </div>
      </div>
    @endfor
  </div>
</div>
</x-layouts.administrarum>