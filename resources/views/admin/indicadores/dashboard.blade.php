<x-layouts.app title="Indicadores">
  <div class="block mx-auto my-auto w-full text-black  max-w-7xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
    <!-- Versión con Grid (recomendada) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        {{-- Iniciador 1 --}}
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Calidad de los docentes.</p>
                    <h3 class="text-2xl font-bold text-gray-900">
                        {{ $respuestasMuyBuena_1 }} respuestas "Muy Buena"
                    </h3>
                    <p class="text-sm text-gray-600">
                        {{ $porcentajeMuyBuena_1 }}% del total de {{ $totalRespuestas_1 }} respuestas
                    </p>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        
            @if ($porcentajeMuyBuena_1 >= 75)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Meta cumplida: al menos el 75% calificó como “Muy Buena”.
                    </span>
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Meta no alcanzada: menos del 75% calificó como “Muy Buena”.
                    </span>
                </p>
            @endif
        </div>
        
        {{-- Indicador 2 --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Plan de Estudios</p>
            <h3 class="text-2xl font-bold text-gray-900">
                {{ $respuestasMuyBuena_2 }} respuestas "Muy Buena"
            </h3>
            <p class="text-sm text-gray-600">
                {{ $porcentajeMuyBuena_2 }}% del total de {{ $totalRespuestas_2 }} respuestas
            </p>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
    </div>

    @if ($porcentajeMuyBuena_2 >= 75)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                Meta cumplida: al menos el 75% calificó como “Muy Buena”.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                Meta no alcanzada: menos del 75% calificó como “Muy Buena”.
            </span>
        </p>
    @endif
</div>


        {{-- Indicador 3 --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Oportunidad de participar en proyectos de investigación y desarrollo</p>
            <h3 class="text-2xl font-bold text-gray-900">
                {{ $respuestasMuyBuena_3 }} respuestas "Muy Buena"
            </h3>
            <p class="text-sm text-gray-600">
                {{ $porcentajeMuyBuena_3 }}% del total de {{ $totalRespuestas_3 }} respuestas
            </p>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
    </div>

    @if ($porcentajeMuyBuena_3 >= 50)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta cumplida: al menos el 50% calificó como “Muy Buena”.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta no alcanzada: menos del 50% calificó como “Muy Buena”.
            </span>
        </p>
    @endif
</div>

{{-- Indicador 4 --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Énfasis en la investigación en el proceso de enseñanza-aprendizaje</p>
            <h3 class="text-2xl font-bold text-gray-900">
                {{ $respuestasMuyBuena_4 }} respuestas "Muy Buena"
            </h3>
            <p class="text-sm text-gray-600">
                {{ $porcentajeMuyBuena_4 }}% del total de {{ $totalRespuestas_4 }} respuestas
            </p>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </div>
    </div>
    @if ($porcentajeMuyBuena_4 >= 50)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta cumplida: al menos el 50% calificó como “Muy Buena”.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta no alcanzada: menos del 50% calificó como “Muy Buena”.
            </span>
        </p>
    @endif
</div>

{{-- Indicador 5 --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Satisfacción con condiciones de estudio (infraestructura)</p>
            <h3 class="text-2xl font-bold text-gray-900">
                {{ $respuestasMuyBuena_5 }} respuestas "Muy Buena"
            </h3>
            <p class="text-sm text-gray-600">
                {{ $porcentajeMuyBuena_5 }}% del total de {{ $totalRespuestas_5 }} respuestas
            </p>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </div>
    </div>
    @if ($porcentajeMuyBuena_5 >= 75)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta cumplida: al menos el 75% calificó como “Muy Buena”.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta no alcanzada: menos del 75% calificó como “Muy Buena”.
            </span>
        </p>
    @endif
</div>

{{-- Indicador 6 --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Experiencia obtenida en la Residencia Profesional</p>
            <h3 class="text-2xl font-bold text-gray-900">
                {{ $respuestasMuyBuena_6 }} respuestas "Muy Buena"
            </h3>
            <p class="text-sm text-gray-600">
                {{ $porcentajeMuyBuena_6 }}% del total de {{ $totalRespuestas_6 }} respuestas
            </p>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </div>
    </div>
    @if ($porcentajeMuyBuena_6 >= 90)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta cumplida: al menos el 90% calificó como “Muy Buena”.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"/></svg>
                Meta no alcanzada: menos del 90% calificó como “Muy Buena”.
            </span>
        </p>
    @endif
</div>

    </div>
{{-- ////////////////////////////////////////////////////// SECCION 3 --}}
    <p class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-8 mb-4 flex items-center">III. UBICACIÓN LABORAL DE LOS EGRESADOS </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        {{-- Indicador Sección 3 - Indicador 1 --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">
                Porcentaje de egresados que trabajan o trabajan y estudian
            </p>
            <h3 class="text-2xl font-bold text-gray-900">
                {{ $porcentajeTrabaja_Seccion3_1 }}%
            </h3>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
    </div>

    @if ($porcentajeTrabaja_Seccion3_1 >= 60)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" />
                </svg>
                Meta cumplida: al menos el 60% de los egresados trabaja o trabaja y estudia.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" />
                </svg>
                Meta no alcanzada: menos del 60% de los egresados trabaja o trabaja y estudia.
            </span>
        </p>
    @endif
</div>

        
        {{-- Indicador 2 (Sección 3) --}}
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Medio para obtener el empleo</p>
            <h3 class="text-md font-bold text-gray-900">
                {{ $respuestasBolsaTrabajo_Seccion3_2 }} respuestas "Bolsa de trabajo del plantel"
            </h3>
            <p class="text-sm text-gray-600">
                {{ $porcentajeBolsaTrabajo_Seccion3_2 }}% del total de {{ $totalRespuestas_Seccion3_2 }} respuestas
            </p>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
    </div>

    @if ($porcentajeBolsaTrabajo_Seccion3_2 >= 10)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                Meta cumplida: al menos el 10% recibió apoyo de la Bolsa de Trabajo del Instituto.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.707 10.707a1 1 0 01-1.414 0L10 7.414 6.707 10.707a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Meta no alcanzada: menos del 10% recibió apoyo de la Bolsa de Trabajo del Instituto.
            </span>
        </p>
    @endif
</div>

<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Trabajo actual</p>
            <h3 class="text-md font-bold text-gray-900">
                {{ $porcentajeTrabaja_Seccion3_3 }}%  está trabajando o trabajando y estudiando
            </h3>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
    </div>
    @if ($porcentajeTrabaja_Seccion3_3 >= 60)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                Al menos el 60% de los egresados están trabajando o trabajando y estudiando
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                Meta no alcanzada: menos del 60% está trabajando o trabajando y estudiando
            </span>
        </p>
    @endif
</div>

        
<div class="bg-white rounded-lg shadow p-6 mb-2">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-sm font-medium">Nivel jerárquico en el trabajo</p>
            <h3 class="text-sm font-bold text-gray-900">{{ $porcentajePuestosSuperiores_Seccion3_4 }}% de los egresados ocupan puestos de mando intermedio y superior.</h3>
        </div>
        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
    </div>
    
    @if ($porcentajePuestosSuperiores_Seccion3_4 >= 70)
        <p class="mt-2 text-sm text-green-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                ¡Meta alcanzada! Al menos el 70% de los egresados ocupan puestos de mando intermedio y superior.
            </span>
        </p>
    @else
        <p class="mt-2 text-sm text-red-600 font-medium">
            <span class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                No se alcanzó la meta. Menos del 70% de los egresados ocupan puestos de mando intermedio y superior.
            </span>
        </p>
    @endif
</div>

        
        
    </div>

{{-- ///////////////////////////////////////////////////// Seccion 4 --}}

    <p class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-8 mb-4 flex items-center">IV. DESEMPEÑO PROFESIONAL (Coherencia entre la formación y el tipo de empleo)</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Eficiencia para realizar las actividades laborales, en relación con su formación académica </p>
                    <h3 class="text-md font-bold text-gray-900">{{ $porcentajeEficiencia_Seccion4_1 }}%  de los egresados reportaron que su formación académica les permite desempeñarse eficientemente.</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            @if ($porcentajeEficiencia_Seccion4_1 >= 70)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        ¡Meta alcanzada! Al menos el 70% de los egresados reportaron que su formación académica les permite desempeñarse eficientemente.
                    </span>
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        No se alcanzó la meta. Menos del 70% de los egresados reportaron que su formación académica les permite desempeñarse eficientemente.
                    </span>
                </p>
            @endif
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Relación del trabajo con su área de formación académica</p>
                    <h3 class="text-md font-bold text-gray-900">{{ $porcentajeFormacionAcademica_Seccion4_2 }}% utilizan los conocimientos y habilidades que se adquirieron durante los estudios.</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            @if ($porcentajeFormacionAcademica_Seccion4_2 >= 90)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        ¡Meta alcanzada! Al menos el 90%  utilizan los conocimientos y habilidades que se adquirieron durante los estudios.
                    </span>
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        No se alcanzó la meta. Menos del 90% utilizan los conocimientos y habilidades que se adquirieron durante los estudios.
                    </span>
                </p>
            @endif
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Aspectos de valoración para obtener el empleo</p>
                    <h3 class="text-md font-bold text-gray-900">{{ $totalRespuestas_Seccion4_3 }}% de egresados que reportaron carencias</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            <p class="mt-2 text-sm text-green-600 font-medium">
                
        
            @if ($porcentajeCarencias_Seccion4_3 <= 10)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    El porcentaje de egresados que reportaron carencias es de {{ $porcentajeCarencias_Seccion4_3 }}%, lo que está dentro del límite aceptable.
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    El porcentaje de egresados que reportaron carencias es de {{ $porcentajeCarencias_Seccion4_3 }}%, lo que supera el límite del 10%.
                </p>
            @endif
        </div>
        
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Utilidad de las residencias profesionales o prácticas profesionales para el desarrollo laboral y profesional </p>
                    <h3 class="text-sm font-bold text-gray-900">{{ $totalRespuestas_Seccion4_4 }}% de los egresados reportan la utilidad de las residencias profesionales para la obtención de empleo</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            
            @if ($porcentajeUtilidadResidencias_Seccion4_4 >= 30)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Al menos el 30% de los egresados reportan la utilidad de las residencias profesionales para la obtención de empleo.
                    </span>
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Menos del 30% de los egresados reportan la utilidad de las residencias profesionales para la obtención de empleo.
                    </span>
                </p>
            @endif
        </div>
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Deficiencias en su formación profesional para realizar las actividades laborales</p>
                    <h3 class="text-sm font-bold text-gray-900">{{ $porcentajeDeficiencia_Seccion4_5 }}% de los egresados debe reportaron deficiencias en su formación</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        
            @if ($porcentajeDeficiencia_Seccion4_5 <= 10)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Como máximo el 10% de los egresados debe reportar deficiencias en su formación
                    </span>
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Como máximo el 10% de los egresados debe reportar deficiencias en su formación
                    </span>
                </p>
            @endif
        </div>
        
    </div>

    <p class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mt-8 mb-4 flex items-center">V. EXPECTATIVAS DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Titulación</p>
                    <h3 class="text-2xl font-bold text-gray-900">1,254</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            <p class="mt-2 text-sm text-green-600 font-medium">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    Al menos el 50% de los egresados deben estar titulados en el primer año de egreso
                </span>
            </p>
        </div>
        <div class="bg-white rounded-lg shadow p-6 mb-2">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-medium">Estudios actuales de posgrado</p>
                    <h3 class="text-md font-bold text-gray-900">{{ $porcentajePosgrado_Seccion5_2 }}% de los egresados continúa estudios de posgrado</h3>
                </div>
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
        
            @if ($porcentajePosgrado_Seccion5_2 >= 5)
                <p class="mt-2 text-sm text-green-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        Se cumple el indicador: al menos el 5% de los egresados continúa estudios de posgrado
                    </span>
                </p>
            @else
                <p class="mt-2 text-sm text-red-600 font-medium">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9h2v4h-2V9zm0-4h2v2h-2V5z" clip-rule="evenodd" />
                        </svg>
                        No se cumple el indicador: menos del 5% de los egresados está cursando estudios de posgrado
                    </span>
                </p>
            @endif
        </div>
        
        
    </div>
    </div>
</x-layouts.app>
