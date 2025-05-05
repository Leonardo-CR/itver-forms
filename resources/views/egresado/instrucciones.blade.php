<x-layouts.app>
  <div class="min-h-screen bg-gradient-to-b from-[#f9f9f9] to-[#bcbcbc] py-4">
      <div class="mx-auto w-full max-w-7xl p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
          <!-- FILA RESPONSIVA -->
          <div class="flex flex-col lg:flex-row gap-4">
              <!-- COLUMNA PRINCIPAL -->
              <div class="w-full lg:basis-[80%] flex flex-col gap-2">
                  <!-- INSTRUCCIONES -->
                  <div class="flex flex-col sm:flex-row items-center bg-[#0081B4] text-white p-5 rounded">
                      <div class="flex-1">
                          <h2 class="font-bold uppercase mb-2 text-xl">Instrucciones:</h2>
                          <p class="text-base">
                              <span class="italic font-semibold">Por favor lea cuidadosamente</span> y conteste este cuestionario de la siguiente manera, según sea el caso:
                          </p>
                      </div>
                      <img src="{{ asset('img/instrucciones/instrucciones.png') }}" alt="" class="w-32 h-auto mt-4 sm:mt-0 sm:ml-4">
                  </div>

                  <!-- PARTES DEL CUESTIONARIO -->
                  <div class="bg-[#0081B4] text-white p-5 rounded">
                      <h2 class="font-bold uppercase mb-2 text-xl">Partes del cuestionario de egresados</h2>
                      <ul class="space-y-2 text-base list-inside">
                          <li>
                              <span class="italic font-semibold">1. En el caso de preguntas cerradas</span>, marque la que considere apropiada.
                          </li>
                          <li>
                              <span class="italic font-semibold">2. En las preguntas de valoración</span> se utiliza <span class="italic font-semibold">la escala del 1 al 5</span>, en la que 1 es <span class="italic font-semibold">“muy malo”</span> y 5 es <span class="italic font-semibold">“muy bueno”</span>.
                          </li>
                          <li>
                              <span class="italic font-semibold">3. En los casos de preguntas abiertas</span>, dejamos un espacio para que usted escriba una respuesta.
                          </li>
                          <li>
                              <span class="italic font-semibold">4. Al final</span>, anexamos un apartado para comentarios y sugerencias. Le <span class="italic font-semibold">agradeceremos anote ahí lo que considere prudente</span> para mejorar nuestro sistema educativo.
                          </li>
                      </ul>
                  </div>
              </div>

              <!-- COLUMNA SECUNDARIA -->
              <div class="w-full lg:basis-[20%] flex flex-col gap-2">
                  <!-- RECUERDE -->
                  <div class="bg-[#0081B4] text-white p-5 rounded flex flex-col items-center text-center">
                      <h2 class="font-bold uppercase mb-2 text-xl">¡Recuerde que, su progreso!</h2>
                      <img src="{{ asset('img/instrucciones/guardar.png') }}" alt="" class="w-28 h-auto mt-2">
                  </div>

                  <!-- GRACIAS -->
                  <div class="bg-[#0081B4] text-white p-5 rounded flex flex-col items-center text-center">
                      <h2 class="font-bold uppercase mb-2 text-xl">¡Gracias por su gentil colaboración!</h2>
                      <img src="{{ asset('img/instrucciones/colabora.png') }}" alt="" class="w-28 h-auto mt-2">
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-layouts.app>
