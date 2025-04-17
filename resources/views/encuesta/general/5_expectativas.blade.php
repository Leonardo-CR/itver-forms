<x-layouts.app>
 <!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">EXPECTATIVAS DE DESARROLLO</h5>

  <!-- Radiobutton Preguntas grid 2-->
    <div class="my-6">
        <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Marcar los campos que correspondan a su trayectoria profesional</label>
        <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Le gustaría tomar cursos de actualización?</label>
        <div class="grid gap-4 md:grid-cols-1">
            <div class="flex items-center">
                <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
            </div>
            <div class="flex items-center">
                <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
            </div>
            <div>
                <textarea id="message" rows="1" class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Cuáles"></textarea>
            </div>
        </div>
    </div>

    <div class="my-6">
        <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Le gustaría tomar algún posgrado?</label>
        <div class="grid gap-4 md:grid-cols-1">
            <div class="flex items-center">
                <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
            </div>
            <div class="flex items-center">
                <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
            </div>
            <div>
                <textarea id="message" rows="1" class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Cuál?"></textarea>
            </div>
        </div>
    </div>

    <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</h6>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Pertenece a organizaciones sociales?</label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                </div>
                <div>
                    <textarea id="message" rows="1" class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Cuáles?"></textarea>
                </div>
            </div>
        </div>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Pertenece a organismos de profesionistas?</label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                </div>
                <div>
                    <textarea id="message" rows="1" class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Cuál?"></textarea>
                </div>
            </div>
        </div>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Pertenece a la asociación de egresados?</label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                </div>
            </div>
        </div>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">COMENTARIOS Y SUGERENCIAS</label>
            <div class="grid gap-4 md:grid-cols-1">
                <div>
                    <textarea id="message" rows="1" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máx 100 palabras"></textarea>
                </div>
            </div>
        </div>

    <h1 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center">¡Muchas gracias por su gentil colaboración!</h1>
      
    <!-- Botón al final -->
    <div class="flex justify-end mt-8 mr-12">
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
      text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
        Enviar ➡️
      </button>
    </div>
  </form>
</div>
</x-layouts.app>