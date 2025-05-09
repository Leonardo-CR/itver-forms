<x-layouts.app>
  <div class="h-screen from-[#f9f9f9] to-[#bcbcbc] bg-gradient-to-b py-4">
    <div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
  
      {{-- Encabezado Encuesta --}}
      <div class="flex flex-col md:flex-row gap-2">
        <div class="md:basis-[70%] w-full bg-[#0569ab] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">Partes del cuestionario de egresados</h2>
          <p class="text-base"><span class="italic font-semibold">¡Hola egresado!,</span> este cuestionario se divide en <span class="italic font-semibold">7 partes no lineales</span> las cuales deberás responder.</p>
        </div>
        <div class="md:basis-[30%] w-full bg-[#0569ab] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">¡Verifica tu informacion personal!</h2>
        </div>
      </div>
  
      {{-- Sección 1 --}}
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">I. Datos Personales</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            
            <a href="{{ route('quibio.datos_personales') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
          </div>
        </div>
      </div>
  
      {{-- Sección 2 --}}
      @php $respondida = in_array(9, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">II. Situación Laboral Y RECURSOS PARA EL APRENDIZAJE</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('quibio.situacion_laboral') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
  
      {{-- Sección 3 --}}
      @php $respondida = in_array(10, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">III. Plan de estudios</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('quibio.plan_estudios') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
  
      {{-- Sección 4 --}}
      @php $respondida = in_array(11, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">IV. Institución</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('quibio.institucion') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
  
      {{-- Sección 5 --}}
      @php $respondida = in_array(12, $seccionesRespondidas); @endphp
      <div class="bg-[#0569ab] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">V. Desempeño Laboral</h2>
        <div class="flex flex-col md:flex-row w-full gap-4">
          <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
          <div class="flex flex-col md:flex-row items-start md:items-center gap-2 text-sm shrink-0">
            @if ($respondida)
              <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">Respondida ✅</span>
            @else
              <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente 🕒</span>
              <a href="{{ route('quibio.desempeno_laboral') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">Responder ✍️</a>
            @endif
          </div>
        </div>
      </div>
  
    </div>
  </div>
  </x-layouts.app>
  