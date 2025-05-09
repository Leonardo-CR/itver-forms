<x-layouts.app>
  <div class="h-full bg-gradient-to-b from-[#f9f9f9] to-[#bcbcbc] py-4">
    <div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
  
      <!-- FILA 1 -->
      <div class="flex flex-col md:flex-row gap-2">
        <div class="md:basis-[70%] w-full bg-[#0569ab] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">Partes del cuestionario de egresados</h2>
          <p class="text-base"><span class="italic font-semibold">¡Hola egresado!,</span> este cuestionario se divide en <span class="italic font-semibold">5 partes no lineales</span> las cuales deberás responder.</p>        
        </div>
        <div class="md:basis-[30%] w-full bg-[#0569ab] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">¡Verifica tu informacion personal!</h2>
        </div>
      </div>
  
      <!-- I. Datos personales -->
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">I. Datos Personales</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            
            <a href="{{ route('general.datos_personales') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">
              Responder ✍️
            </a>
          </div>
        </div>  
      </div>
  
      <!-- II. Pertinencia -->
      @php $respondida = in_array(2, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">II. Pertinencia y Disponibilidad de Medios y Recursos para el Aprendizaje</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('general.pertinencia') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
  
      <!-- III. Ubicación -->
      @php $respondida = in_array(3, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">III. Ubicación Laboral de los Egresados</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('general.ubicacion') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
  
      <!-- IV. Desempeño -->
      @php $respondida = in_array(4, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">IV. Desempeño Profesional de los Egresados</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('general.desempeno') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
      
      <div class="bg-[#0569ab] rounded">
      <!-- V, VI y VII: Expectativas, Participación social y Comentarios en un solo div -->
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">V. Expectativas de Desarrollo, Superación Profesional y de Actualización</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
        </div>
      </div>

      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">VI. Participación Social de los Egresados</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
        </div>
      </div>

      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        @php $respondida = in_array(5, $seccionesRespondidas); @endphp
        <h2 class="font-bold uppercase mb-2 text-xl">VII. Comentarios y Sugerencias</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('general.expectativas') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</x-layouts.app>
