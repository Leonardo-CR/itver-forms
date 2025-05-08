<x-layouts.app>
  <div href="#" class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
      <h5 class="mb-2 text-2xl uppercase font-bold tracking-tight text-gray-900 dark:text-white">Pertinencia y disponibilidad de medios y recursos para el aprendizaje</h5>
      <form method="POST" action="{{ route('general.store') }}" id="formulario">
        @method('POST')
        @csrf
        <!-- FILA 1-->
        <div>
          <label for="m_buena1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calidad de los docentes:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input required id="m_buena1" type="radio" value="Muy buena" @if(old('s2_p1', optional($respuestas)['s2_p1']) == "Muy buena") checked @endif name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input required id="buena1" type="radio" value="Buena" @if(old('s2_p1', optional($respuestas)['s2_p1']) == "Buena") checked @endif name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input required id="regular1" type="radio" value="Regular" @if(old('s2_p1', optional($respuestas)['s2_p1']) == "Regular") checked @endif name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input required id="mala1" type="radio" value="Mala" @if(old('s2_p1', optional($respuestas)['s2_p1']) == "Mala") checked @endif name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 2-->
        <div>
          <label for="m_buena2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plan de estudios:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input required id="m_buena2" type="radio" value="Muy buena" @if(old('s2_p2', optional($respuestas)['s2_p2']) == "Muy buena") checked @endif name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input required id="buena2" type="radio" value="Buena" @if(old('s2_p2', optional($respuestas)['s2_p2']) == "Buena") checked @endif name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input required id="regular2" type="radio" value="Regular" @if(old('s2_p2', optional($respuestas)['s2_p2']) == "Regular") checked @endif name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input required id="mala2" type="radio" value="Mala" @if(old('s2_p2', optional($respuestas)['s2_p2']) == "Mala") checked @endif name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 3-->
        <div>
          <label for="m_buena3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Oportunidad de participar en proyectos de investigación y desarrollo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input required id="m_buena3" type="radio" value="Muy buena" @if(old('s2_p3', optional($respuestas)['s2_p3']) == "Muy buena") checked @endif name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input required id="buena3" type="radio" value="Buena" @if(old('s2_p3', optional($respuestas)['s2_p3']) == "Buena") checked @endif name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input required id="regular3" type="radio" value="Regular" @if(old('s2_p3', optional($respuestas)['s2_p3']) == "Regular") checked @endif name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input required id="mala3" type="radio" value="Mala" @if(old('s2_p3', optional($respuestas)['s2_p3']) == "Mala") checked @endif name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 4-->
        <div>
          <label for="m_buena4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Énfasis que se le prestaba a la investigación dentro del proceso de enseñanza:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input required id="m_buena4" type="radio" value="Muy buena" @if(old('s2_p4', optional($respuestas)['s2_p4']) == "Muy buena") checked @endif name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input required id="buena4" type="radio" value="Buena" @if(old('s2_p4', optional($respuestas)['s2_p4']) == "Buena") checked @endif name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input required id="regular4" type="radio" value="Regular" @if(old('s2_p4', optional($respuestas)['s2_p4']) == "Regular") checked @endif name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input required id="mala4" type="radio" value="Mala" @if(old('s2_p4', optional($respuestas)['s2_p4']) == "Mala") checked @endif name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 5-->
        <div>
          <label for="m_buena5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satisfacción con las condiciones de estudio (infraestructura):</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input required id="m_buena5" type="radio" value="Muy buena" @if(old('s2_p5', optional($respuestas)['s2_p5']) == "Muy buena") checked @endif name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input required id="buena5" type="radio" value="Buena" @if(old('s2_p5', optional($respuestas)['s2_p5']) == "Buena") checked @endif name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input required id="regular5" type="radio" value="Regular" @if(old('s2_p5', optional($respuestas)['s2_p5']) == "Regular") checked @endif name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input required id="mala5" type="radio" value="Mala" @if(old('s2_p5', optional($respuestas)['s2_p5']) == "Mala") checked @endif name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
       
         <!-- FILA 1-->
      <div>
        <label for="m_buena1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Experiencia obtenida a través de la residencia profesional:</label>
        <div class="flex flex-col mb-4 sexo">
          <div>
            <input id="m_buena1" type="radio" value="Muy buena" @if(old('s2_p6', optional($respuestas)['s2_p6']) == "Muy buena") checked @endif name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="m_buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
          </div>
          <div>
            <input id="buena1" type="radio" value="Buena" @if(old('s2_p6', optional($respuestas)['s2_p6']) == "Buena") checked @endif name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
          </div>
          <div>
            <input id="regular1" type="radio" value="Regular" @if(old('s2_p6', optional($respuestas)['s2_p6']) == "Regular") checked @endif name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="regular1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
          </div>
          <div>
            <input id="mala1" type="radio" value="Mala" @if(old('s2_p6', optional($respuestas)['s2_p6']) == "Mala") checked @endif name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="mala1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
          </div>
        </div>
      </div>
      <!-- FILA 5 -->
      <div class="flex">
        <button type="submit"  class="ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Terminar Sección</button>
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