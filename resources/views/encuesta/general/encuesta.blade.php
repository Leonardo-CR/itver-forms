<x-layouts.app>
    {{-- <!-- CDN de tailwind -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
<div class="h-full bg-gradient-to-b from-[#f9f9f9] to-[#bcbcbc] py-4">
  <div class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
    <!-- FILA 1-->
    <div class="flex gap-2">
      <div class="basis-[70%] bg-[#0081B4] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">Partes del cuestionario de egresados</h2>
        <p class="text-base"><span class="italic font-semibold">¡Hola egresado!,</span> este cuestionario se divide en <span class="italic font-semibold">5 partes no lineales</span> las cuales deberás responder.</p>        
      </div>
      <div class="basis-[30%] bg-[#0081B4] mb-2 p-5 text-white rounded">
        <h2 class="font-bold uppercase mb-2 text-xl">¡Verifica tu informacion personal!</h2>
      </div>
    </div>

    <!-- FILA 1-->
    <div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
      <h2 class="font-bold uppercase mb-2 text-xl">I.Datos Personales</h2>
      <div class="flex w-full gap-4">
        <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
        <div class="flex items-center gap-2 text-sm shrink-0">
          <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">Pendiente <span>🕒</span></span>
            <a href="{{ route("general.datos_personales") }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">
              Responder <span>✍️</span>
            </a>
            
          </div>
      </div>  
    </div>
    <!-- FILA 1-->
    @php $respondida = in_array(2, $seccionesRespondidas); @endphp

<div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
  <h2 class="font-bold uppercase mb-2 text-xl">II. PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE</h2>
  <div class="flex w-full gap-4">
    <p class="flex-1 text-base">
      <span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.
    </p>
    <div class="flex items-center gap-2 text-sm shrink-0">
      @if ($respondida)
        <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">
          Respondida ✅
        </span>
      @else
        <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">
          Pendiente 🕒
        </span>
        <a href="{{ route('general.pertinencia') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">
          Responder ✍️
        </a>
      @endif
    </div>
  </div>
</div>

    <!-- FILA 1-->

    <!-- FILA 1-->
    @php $respondida = in_array(3, $seccionesRespondidas); @endphp

<div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
  <h2 class="font-bold uppercase mb-2 text-xl">III.UBICACIÓN LABORAL DE LOS EGRESADOS</h2>
  <div class="flex w-full gap-4">
    <p class="flex-1 text-base">
      <span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.
    </p>
    <div class="flex items-center gap-2 text-sm shrink-0">
      @if ($respondida)
        <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">
          Respondida ✅
        </span>
      @else
        <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">
          Pendiente 🕒
        </span>
        <a href="{{ route('general.ubicacion') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">
          Responder ✍️
        </a>
      @endif
    </div>
  </div>
</div>

     <!-- FILA 1-->
     @php $respondida = in_array(4, $seccionesRespondidas); @endphp

     <div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
       <h2 class="font-bold uppercase mb-2 text-xl">IV.DESEMPEÑO PROFESIONAL DE LOS EGRESADOS</h2>
       <div class="flex w-full gap-4">
         <p class="flex-1 text-base">
           <span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.
         </p>
         <div class="flex items-center gap-2 text-sm shrink-0">
           @if ($respondida)
             <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">
               Respondida ✅
             </span>
           @else
             <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">
               Pendiente 🕒
             </span>
             <a href="{{ route('general.desempeno') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">
               Responder ✍️
             </a>
           @endif
         </div>
       </div>
     </div>
    <!-- FILA 1-->

    <div class="bg-[#0081B4]  rounded">

      

      


    <!-- FILA 1-->
    <div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
      <h2 class="font-bold uppercase mb-2 text-xl">V.EXPECTATIVAS DE DESARROLLO, SUPERACIÓN
        PROFESIONAL Y DE ACTUALIZACIÓN</h2>
      <div class="flex w-full gap-4">
        <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
       
      </div>  
    </div>
    <!-- FILA 1-->
    <!-- FILA 1-->
    <div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
      <h2 class="font-bold uppercase mb-2 text-xl">VI.PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</h2>
      <div class="flex w-full gap-4">
        <p class="flex-1 text-base"><span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.</p>
        
      </div>  
    </div>
    <!-- FILA 1-->
    <!-- FILA 1-->
    @php $respondida = in_array(5, $seccionesRespondidas); @endphp

     <div class="bg-[#0081B4] mb-2 p-5 text-white rounded">
       <h2 class="font-bold uppercase mb-2 text-xl">VII.COMENTARIOS Y SUGERENCIAS</h2>
       <div class="flex w-full gap-4">
         <p class="flex-1 text-base">
           <span class="italic font-semibold">El egresado explica</span> su situación laboral/profesional actual.
         </p>
         <div class="flex items-center gap-2 text-sm shrink-0">
           @if ($respondida)
             <span class="bg-green-500 text-white px-2 py-1 rounded flex items-center gap-1">
               Respondida ✅
             </span>
           @else
             <span class="bg-orange-500 text-white px-2 py-1 rounded flex items-center gap-1">
               Pendiente 🕒
             </span>
             <a href="{{ route('general.expectativas') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded flex items-center gap-1">
               Responder ✍️
             </a>
           @endif
         </div>
       </div>
     </div> 

      
    </div>
    <!-- FILA 1-->


  </div>
   
  </div>
</div>
</x-layouts.app>