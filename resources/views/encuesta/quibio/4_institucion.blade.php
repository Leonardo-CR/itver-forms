<x-layouts.app>
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Institución</h5>
      
    <!-- Radiobutton Preguntas-->
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿La institución se ha contactado anteriormente contigo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Te gustaría participar con la Institución aportando tu experiencia profesional? </label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Cómo podría ser tu participación?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Impartiendo un curso o conferencia</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="checkbox" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar para una visita industrial donde laboras</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="checkbox" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar a jóvenes de la Institución para la realización de Residencias Profesionales</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar a jóvenes para realizar investigaciones</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar a jóvenes para realizar Educación Dual</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donativos en especie</label>
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