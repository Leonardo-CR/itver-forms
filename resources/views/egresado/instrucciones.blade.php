<x-layouts.app>
    {{-- <!-- CDN de tailwind -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}

<div class="h-screen bg-gradient-to-b from-[#f9f9f9] to-[#bcbcbc]  py-4">
  <div class="block mx-auto my-auto w-full text-black  max-w-7xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
    <!-- FILA 1-->
    <div class="flex gap-2">
      <div class="flex flex-col basis-[80%]">
        <div class="flex items-center basis-[20%] bg-[#0081B4] mb-2 p-5 text-white rounded">
          <div>
            <h2 class="font-bold uppercase mb-2 text-xl">Instrucciónes:</h2>
            <p class="text-base"><span class="italic font-semibold">Por favor lea cuidadosamente</span> y conteste este cuestionario de la siguiente manera, según sea el caso:</p>        
          </div>
          <img src="{{ asset('img/instrucciones/instrucciones.png') }}" class="w-32 h-30" alt="">
        </div>
        <div class="items-center justify-center basis-[80%] bg-[#0081B4] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">Partes del cuestionario de egresados</h2>
          <p class="text-base mb-2">        
            <span class="italic font-semibold">1. En el caso de preguntas cerradas</span>, marque la que considere apropiada.
          </p>
          <p class="text-base mb-2">
            <span class="italic font-semibold">2. En las preguntas de valoración</span> se utiliza <span class="italic font-semibold"> la escala del 1 al 5 </span> en la que 1 es <span class="italic font-semibold">“muy malo”</span> y 5 es <span class="italic font-semibold">“muy bueno”</span>.
          </p>
          <p class="text-base mb-2">
            <span class="italic font-semibold">3. En los casos de preguntas abiertas</span> dejamos un espacio para que usted escriba una respuesta.
          </p>
          <p class="text-base mb-2">
            <span class="italic font-semibold">4. Al final</span> anexamos un apartado para comentarios y sugerencias,
               le <span class="italic font-semibold"> agradeceremos anote ahí lo que considere prudente para mejorar nuestro sistema educativo </span> o bien los temas que, a su juicio, omitimos en el cuestionario.
          </p>
        </div>
      </div>
      <div class="flex flex-col basis-[20%]">
        <div class="flex flex-col items-center justify-center basis-[40%] bg-[#0081B4] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">¡Recuerde que, su progreso!</h2>
          <img src="{{ asset('img/instrucciones/guardar.png') }}" class="w-32 h-30" alt="">
        </div>
        <div class="flex flex-col items-center justify-center basis-[60%] bg-[#0081B4] mb-2 p-5 text-white rounded">
          <h2 class="font-bold uppercase mb-2 text-xl">¡Gracias por su gentil colaboración!</h2>
          <img src="{{ asset('img/instrucciones/colabora.png') }}" class="w-34 h-30" alt="">
        </div>
      </div>      
  </div>
</div>
</x-layouts.app>