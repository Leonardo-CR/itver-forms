<x-layouts.app>
    <form action="{{ route('quibio.store') }}" method="POST" id="formulario">
        @csrf
        @method('POST')
<!-- Contenedor principal Seccion 11 -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Institución</h5>
      
    <!-- Pregunta 1-->
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿La institución se ha contactado anteriormente contigo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input required id="si" type="radio" value="Si" @if(old('s11_p1', optional($respuestas)['s11_p1']) == "Si") checked @endif name="respuesta[s11_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="si" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
              <div class="flex items-center">
                  <input required id="no" type="radio" value="No" @if(old('s11_p1', optional($respuestas)['s11_p1']) == "No") checked @endif name="respuesta[s11_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="no" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 2-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Te gustaría participar con la Institución aportando tu experiencia profesional? </label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input required id="si_dos" type="radio" value="Si" @if(old('s11_p2', optional($respuestas)['s11_p2']) == "Si") checked @endif name="respuesta[s11_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="si_dos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
              <div class="flex items-center">
                  <input required id="no_dos" type="radio" value="No" @if(old('s11_p2', optional($respuestas)['s11_p2']) == "No") checked @endif name="respuesta[s11_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="no_dos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 3-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Cómo podría ser tu participación?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="cursos_conferencia" type="checkbox" value="Impartiendo un curso o conferencia" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s10_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Impartiendo un curso o conferencia', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="cursos_conferencia" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Impartiendo un curso o conferencia</label>
              </div>
              <div class="flex items-center">
                  <input id="apoyo_visita" type="checkbox" value="Apoyar para una visita industrial donde laboras" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s11_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Apoyar para una visita industrial donde laboras', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="apoyo_visita" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar para una visita industrial donde laboras</label>
              </div>
              <div class="flex items-center">
                  <input id="apoyo_jovenes" type="checkbox" value="Apoyar a jóvenes de la Institución para la realización de Residencias Profesionales" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s11_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Apoyar a jóvenes de la Institución para la realización de Residencias Profesionales', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="apoyo_jovenes" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar a jóvenes de la Institución para la realización de Residencias Profesionales</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-otras" type="checkbox" value="Apoyar a jóvenes para realizar investigaciones" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s11_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Apoyar a jóvenes para realizar investigaciones', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar a jóvenes para realizar investigaciones</label>
              </div>
              <div class="flex items-center">
                  <input id="apoyo_dual" type="checkbox" value="Apoyar a jóvenes para realizar Educación Dual" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s11_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Apoyar a jóvenes para realizar Educación Dual', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="apoyo_dual" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apoyar a jóvenes para realizar Educación Dual</label>
              </div>
              <div class="flex items-center">
                  <input id="donativos" type="checkbox" value="Donativos en especie" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s11_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Donativos en especie', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="donativos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donativos en especie</label>
              </div>
              <div class="flex items-center">
                  <input id="otros" type="checkbox" value="Otras" name="respuesta[s11_p3][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s11_p3', optional($respuestas)['s11_p3'] ?? [])) && in_array('Otras', old('s11_p3', optional($respuestas)['s11_p3'] ?? [])))) checked @endif>
                  <label for="otros" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
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