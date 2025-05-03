<x-layouts.app>
<form action="{{ route('quibio.store') }}" method="POST"  id="formulario">
        @csrf
        @method('POST')
<!-- Contenedor principal Seccion 10-->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Plan de Estudios</h5>
      
    <!-- Pregunta 1 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Acerca de las competencias adquiridas en la institución, ¿cómo consideras que te ayudan 
              al desarrollo de tu trabajo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input required id="totalmente" type="radio" value="Totalmente" name="respuesta[s10_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="totalmente" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Totalmente</label>
              </div>
              <div class="flex items-center">
                  <input required id="suficiente" type="radio" value="Suficiente" name="respuesta[s10_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="suficiente" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Suficiente</label>
              </div>
              <div class="flex items-center">
                  <input required id="poco" type="radio" value="Poco" name="respuesta[s10_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="poco" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco</label>
              </div>
              <div class="flex items-center">
                  <input required id="nada" type="radio" value="Nada" name="respuesta[s10_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="nada" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nada</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 2 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál es el grado de satisfacción de la carrera que estudiaste? *</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input required id="muy_satisfecho" type="radio" value="Muy satisfecho" name="respuesta[s10_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="muy_satisfecho" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy satisfecho</label>
              </div>
              <div class="flex items-center">
                  <input required id="satisfecho" type="radio" value="Satisfecho" name="respuesta[s10_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="satisfecho" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Satisfecho</label>
              </div>
              <div class="flex items-center">
                  <input required id="poco_satisfecho" type="radio" value="Poco satisfecho" name="respuesta[s10_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="poco_satisfecho" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco satisfecho</label>
              </div>
              <div class="flex items-center">
                  <input required id="insatisfecho" type="radio" value="Insatisfecho" name="respuesta[s10_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="insatisfecho" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Insatisfecho</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 3 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Qué sugieres reforzar y/o actualizar respecto a los contenidos del programa educativo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input  id="manejo_software" type="checkbox" value="Manejo de softwares" name="respuesta[s10_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="manejo_software" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manejo de softwares</label>
              </div>
              <div class="flex items-center">
                  <input  id="manejo_normas" type="checkbox" value="Manejo de Normas Nacionales e Internacionales" name="respuesta[s10_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="manejo_normas" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manejo de Normas Nacionales e Internacionales</label>
              </div>
              <div class="flex items-center">
                  <input  id="habilidades" type="checkbox" value="Habilidades directivas" name="respuesta[s10_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="habilidades" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Habilidades directivas</label>
              </div>
              <div class="flex items-center">
                  <input  id="evaluacion" type="checkbox" value="Evaluación de proyectos de inversión" name="respuesta[s10_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="evaluacion" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Evaluación de proyectos de inversión</label>
              </div>
              <div class="flex items-center">
                  <input  id="otras" type="checkbox" value="Otras" name="respuesta[s10_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
          </div>
      </div>
  
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
            Terminar Sección
        </button>
      </div>
    </form>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('formulario');
    
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Evitamos que envíe *automáticamente* (por ahora)
    
            // Validamos manualmente el formulario usando HTML5
            if (!form.checkValidity()) {
                form.reportValidity(); // Muestra los mensajes nativos
                return;
            }
    
            // Si es válido, mostramos SweetAlert
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Deseas enviar este formulario?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, enviar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Ahora sí enviamos el formulario
                }
            });
        });
    });
    </script>
</x-layouts.app>