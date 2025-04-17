<x-layouts.app>
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Datos personales</h5>
    
    <!-- Formulario -->
    <form>
      <!-- Campo: Nombres -->
      <div>
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres:</label>
        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu(s) nombre(s)" required />
      </div>
  
      <!-- Grid 2 columnas -->
      <div class="grid gap-6 my-6 md:grid-cols-2">
        <div>
          <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno:</label>
          <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." required />
        </div>
        <div>
          <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno:</label>
          <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." required />
        </div>  
        <div>
          <label for="carrera" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carrera:</label>
          <input type="text" id="carrera" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ing. Química" required />
        </div>
        <div>
          <label for="especialidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad:</label>
          <input type="text" id="especialidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Biocombustibles" required />
        </div>  
      </div>
  
      <!-- Grid 3 columnas -->
      <div class="grid gap-6 my-6 md:grid-cols-3">
        <div>
          <label for="ingreso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de Ingreso:</label>
          <input type="text" id="ingreso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: 2025" required />
        </div>
        <div>
          <label for="egreso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de Egreso:</label>
          <input type="text" id="egreso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: 2025" required />
        </div>
        <div>
          <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de Teléfono:</label>
          <div class="relative">
            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
              </svg>
            </div>
            <input type="text" id="phone-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
          </div>
        </div>
      </div>
  
      <!-- Campo: Correo Electrónico -->
       <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico:</label>
          <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ejemplo@veracruz.tecnm.mx" required />
       </div>
  
      <!-- 2 columnas (Numero control y Red Social) -->
      <div class="grid gap-6 my-6 md:grid-cols-2">
          <div>
            <label for="no_control" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de Control:</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2202...." required />
          </div>
          <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Red social (Facebook, Instagram, X):</label>
            <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="@usuario" required />
          </div>  
      </div>
  
      <!-- Radiobutton Preguntas-->
      <div class="grid gap-0.5 my-0.5 md:grid-cols-1">
          <div>
              <label for="titulado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Estás titulado?:</label>
          </div>
          <div class="flex items-center mb-4">
              <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
          </div>
          <div class="flex items-center">
              <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál considera que fue el principal obstáculo?</label>
          <div class="grid gap-4 md:grid-cols-2">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Compromiso Laboral</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Falta de Apoyo Institucional</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Falta de Tiempo</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
          </div>
          </div>
      </div>
  
      <!-- Input-->
      <div class="grid gap-0.5 my-5 md:grid-cols-1">
          <div>
              <label for="explicate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Explicate:</label>
              <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu explicación"></textarea>
          </div>
               
      </div>
  
      <!-- Segundo radiobuttons -->
      <div class="grid gap-0.5 my-0.5 md:grid-cols-1">
          <div>
              <label for="relacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> ¿Tu trabajo actual tiene relación con la carrera qué estudiaste?:</label>
          </div>
          <div class="flex items-center mb-4">
              <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
          </div>
          <div class="flex items-center">
              <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
      </div>
    
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Completar ➡️
        </button>
      </div>
    </form>
  </div>
</x-layouts.app>