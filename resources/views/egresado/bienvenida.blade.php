<x-layouts.app>
{{-- <!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}

<!-- Contenedor principal -->
<div class="h-screen bg-gradient-to-b from-[#f9f9f9] to-[#bcbcbc]  py-4">

  <div class="block mx-auto my-auto w-full text-black  max-w-7xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 grid grid-cols-1 md:grid-cols-3 gap-4 p-2 rounded-lg shadow-md">

      <!-- Columna izquierda: Bienvenido y Opinión -->
      <div class="flex flex-col gap-4 col-span-1">

        <!-- Tarjeta de Bienvenida -->
        <div class="rounded-lg bg-[#0569ab] text-white flex items-center justify-center">
          <div class="text-center p-4 flex flex-col items-center w-full">
            <h2 class="text-2xl font-bold">Bienvenido</h2>
            <p class="mt-2 text-lg">{{ auth()->user()->name }}</p>
            
          </div>
        </div>

        <!-- Tarjeta: Tu Opinión importa -->
        <div class="rounded-lg shadow-md bg-[#0569ab] text-white flex items-center justify-center">
          <div class="text-center p-9 flex flex-col justify-center items-center w-full">
            <h2 class="text-2xl sm:text-5xl font-bold">¡Tu Opinión importa!</h2>
            <img src="{{ asset('img/egresado/tablero.png') }}" alt="Ícono" class="w-40 sm:w-30 h-auto mt-8 ml-6" />
          </div>
        </div>

      </div>

      <!-- Columna derecha: Participar es muy fácil -->
      <div class="col-span-1 md:col-span-2 rounded-lg bg-[#0569ab] text-white shadow-md  items-center justify-center">
        <div class="flex flex-col h-full">
          <div class="text-5xl sm:text-6xl mb-6 mt-10">
            <p class="py-4 ml-10 font-bold">¡Participar es muy fácil!</p>
            <p class="py-4 ml-10 text-base sm:text-2xl">Accede a nuestras encuestas, responde de manera rápida y sencilla, y contribuye al crecimiento de nuestra comunidad educativa.
            </p>
          </div>
          <div class="flex">
            <div class="basis-[73%] bg-[#0569ab]">
              <p class="text-base sm:text-2xl ml-10">A través de tus respuestas, podemos identificar áreas de oportunidad y mejorar continuamente.</p>
              <p class="text-base sm:text-2xl ml-10 py-6">¡Tu participación es fundamental!</p>
              
            </div>
            <div class="basis-[27%]  md:flex hidden ">
              <img src="{{ asset('img/egresado/participar.png') }}" alt="Encuesta" class="w-30 sm:w-40 h-auto"/>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjeta inferior -->
      <div class="col-span-1 md:col-span-3 rounded-lg bg-[#0569ab] text-white shadow-md flex items-center justify-center">
        <div class="text-white p-4 flex flex-col md:flex-row justify-between items-center w-full">
          <div class="text-center md:text-left">
            <h2 class="text-4xl sm:text-4xl font-bold mb-6">Tu opinión nos ayuda a mejorar</h2>
            <p class="mt-2 text-base sm:text-lg">En nuestra institución, cada voz cuenta. Responde nuestras encuestas y 
                ayúdanos a mejorar la calidad de nuestros servicios educativos.</p>
          </div>
          <img src="{{ asset('img/egresado/persona_laptop.png') }}" alt="Persona laptop" class="w-24 sm:w-32 h-auto mt-10 mt-4 mr-10" />
        </div>
      </div>

    </div>
  </div>
</div>


</x-layouts.app>