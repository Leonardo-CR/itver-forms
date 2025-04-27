<x-layouts.app>
  <div href="#" class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
      <h5 class="mb-2 text-2xl uppercase font-bold tracking-tight text-gray-900 dark:text-white">Pertinencia y disponibilidad de medios y recursos para el aprendizaje</h5>
      <form method="POST" action="{{ route('quibio.store') }}">
        @method('POST')
        @csrf
        <!-- FILA 1-->
        <div>
          <label for="m_buena1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calidad de los docentes:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="m_buena1" type="radio" value="Muy buena" name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input id="buena1" type="radio" value="Buena" name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input id="regular1" type="radio" value="Regular" name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input id="mala1" type="radio" value="Mala" name="respuesta[s2_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 2-->
        <div>
          <label for="m_buena2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plan de estudios:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="m_buena2" type="radio" value="Muy buena" name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input id="buena2" type="radio" value="Buena" name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input id="regular2" type="radio" value="Regular" name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input id="mala2" type="radio" value="Mala" name="respuesta[s2_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 3-->
        <div>
          <label for="m_buena3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Oportunidad de participar en proyectos de investigación y desarrollo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="m_buena3" type="radio" value="Muy buena" name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input id="buena3" type="radio" value="Buena" name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input id="regular3" type="radio" value="Regular" name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input id="mala3" type="radio" value="Mala" name="respuesta[s2_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 4-->
        <div>
          <label for="m_buena4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Énfasis que se le prestaba a la investigación dentro del proceso de enseñanza:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="m_buena4" type="radio" value="Muy buena" name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input id="buena4" type="radio" value="Buena" name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input id="regular4" type="radio" value="Regular" name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input id="mala4" type="radio" value="Mala" name="respuesta[s2_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
        <!-- FILA 5-->
        <div>
          <label for="m_buena5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satisfacción con las condiciones de estudio (infraestructura):</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="m_buena5" type="radio" value="Muy buena" name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="m_buena5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
            </div>
            <div>
              <input id="buena5" type="radio" value="Buena" name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="buena5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
            </div>
            <div>
              <input id="regular5" type="radio" value="Regular" name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="regular5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
            </div>
            <div>
              <input id="mala5" type="radio" value="Mala" name="respuesta[s2_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="mala5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
            </div>
          </div>
        </div>
       
         <!-- FILA 1-->
      <div>
        <label for="m_buena1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Experiencia obtenida a través de la residencia profesional:</label>
        <div class="flex flex-col mb-4 sexo">
          <div>
            <input id="m_buena1" type="radio" value="Muy buena" name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="m_buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy buena</label>
          </div>
          <div>
            <input id="buena1" type="radio" value="Buena" name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="buena1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Buena</label>
          </div>
          <div>
            <input id="regular1" type="radio" value="Regular" name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="regular1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
          </div>
          <div>
            <input id="mala1" type="radio" value="Mala" name="respuesta[s2_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="mala1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mala</label>
          </div>
        </div>
      </div>
      <!-- FILA 5 -->
      <div class="flex">
        <button type="submit" class="ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Terminar Sección</button>
      </div>
      </form>
    </div>
  </x-layouts.app>