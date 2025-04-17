<x-layouts.app>
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Plan de Estudios</h5>
      
    <!-- Radiobutton Preguntas-->
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Acerca de las competencias adquiridas en la institución, ¿cómo consideras que te ayudan 
              al desarrollo de tu trabajo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Totalmente</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Suficiente</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nada</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál es el grado de satisfacción de la carrera que estudiaste? *</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy satisfecho</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Satisfecho</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco satisfecho</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Insatisfecho</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Qué sugieres reforzar y/o actualizar respecto a los contenidos del programa educativo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manejo de softwares</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="checkbox" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manejo de Normas Nacionales e Internacionales</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="checkbox" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Habilidades directivas</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Evaluación de proyectos de inversión</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
          </div>
          </div>
      </div>
  
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Enviar ➡️
        </button>
      </div>
    </form>
  </div>
</x-layouts.app>