<x-layouts.app>
  <form action="{{ route('general.store') }}" method="POST"  id="formulario">
    @csrf
    @method('POST')
  <!-- Contenedor principal -->
  <div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Desempeño Profesional</h5>
  
    <!-- Radiobutton Preguntas grid 2-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Marcar los campos que correspondan a su trayectoria profesional</label>
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Eficiencia para realizar las actividades laborales, en relación con su formación académica</label>
          <div class="grid gap-4 md:grid-cols-2">
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Muy eficiente" @if(old('s4_p1', optional($respuestas)['s4_p1']) == "Muy eficiente") checked @endif name="respuesta[s4_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy eficiente</label>
              </div>
          <div class="flex items-center">
              <input required id="radio-apoyo" type="radio" value="Eficiente" @if(old('s4_p1', optional($respuestas)['s4_p1']) == "Eficiente") checked @endif name="respuesta[s4_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eficiente</label>
          </div>
          <div class="flex items-center">
              <input required id="radio-tiempo" type="radio" value="Poco eficiente" @if(old('s4_p1', optional($respuestas)['s4_p1']) == "Poco eficiente") checked @endif name="respuesta[s4_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco eficiente</label>
          </div>
          <div class="flex items-center">
              <input required id="radio-otras" type="radio" value="Deficiente" @if(old('s4_p1', optional($respuestas)['s4_p1']) == "Deficiente") checked @endif name="respuesta[s4_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deficiente</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cómo califica su formación académica con respecto a su desempeño laboral?</label>
          <div class="grid gap-4 md:grid-cols-2">
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Excelente" @if(old('s4_p2', optional($respuestas)['s4_p2']) == "Excelente") checked @endif name="respuesta[s4_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Excelente</label>
              </div>
          <div class="flex items-center">
              <input required id="radio-apoyo" type="radio" value="Malo" @if(old('s4_p2', optional($respuestas)['s4_p2']) == "Malo") checked @endif name="respuesta[s4_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Malo</label>
          </div>
          <div class="flex items-center">
              <input required id="radio-tiempo" type="radio" value="Bueno" @if(old('s4_p2', optional($respuestas)['s4_p2']) == "Bueno") checked @endif name="respuesta[s4_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bueno</label>
          </div>
          <div class="flex items-center">
              <input required id="radio-otras" type="radio" value="Pésimo" @if(old('s4_p2', optional($respuestas)['s4_p2']) == "Pésimo") checked @endif name="respuesta[s4_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pésimo</label>
          </div>
          <div class="flex items-center">
              <input required id="radio-otras" type="radio" value="Regular" @if(old('s4_p2', optional($respuestas)['s4_p2']) == "Regular") checked @endif name="respuesta[s4_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Excelente" @if(old('s4_p3', optional($respuestas)['s4_p3']) == "Excelente") checked @endif name="respuesta[s4_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Excelente</label>
              </div>
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Bueno" @if(old('s4_p3', optional($respuestas)['s4_p3']) == "Bueno") checked @endif name="respuesta[s4_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bueno</label>
              </div>
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Regular" @if(old('s4_p3', optional($respuestas)['s4_p3']) == "Regular") checked @endif name="respuesta[s4_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
              </div>
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Malo" @if(old('s4_p3', optional($respuestas)['s4_p3']) == "Malo") checked @endif name="respuesta[s4_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Malo</label>
              </div>
              <div class="flex items-center">
                  <input required id="radio-compromiso" type="radio" value="Pésimo" @if(old('s4_p3', optional($respuestas)['s4_p3']) == "Pésimo") checked @endif name="respuesta[s4_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pésimo</label>
              </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
            Aspectos que valora la empresa u organismo para la contratación de egresados:
          </label>
          <div class="grid gap-4 md:grid-cols-1">
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">
                -Área o Campo de Estudio
              </label>
              <select  required name="respuesta[s4_p4]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p4', optional($respuestas)['s4_p4']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p4', optional($respuestas)['s4_p4']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p4', optional($respuestas)['s4_p4']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p4', optional($respuestas)['s4_p4']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p4', optional($respuestas)['s4_p4']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Titulación</label>
              <select required name="respuesta[s4_p5]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p5', optional($respuestas)['s4_p5']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p5', optional($respuestas)['s4_p5']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p5', optional($respuestas)['s4_p5']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p5', optional($respuestas)['s4_p5']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p5', optional($respuestas)['s4_p5']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Experiencia Laboral/práctica (antes de egresar)</label>
              <select required name="respuesta[s4_p6]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p6', optional($respuestas)['s4_p6']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p6', optional($respuestas)['s4_p6']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p6', optional($respuestas)['s4_p6']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p6', optional($respuestas)['s4_p6']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p6', optional($respuestas)['s4_p6']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Competencia Laboral: Habilidad para resolver <br> problemas, etc.</label>
              <select required name="respuesta[s4_p7]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p7', optional($respuestas)['s4_p7']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p7', optional($respuestas)['s4_p7']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p7', optional($respuestas)['s4_p7']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p7', optional($respuestas)['s4_p7']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p7', optional($respuestas)['s4_p7']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Posicionamiento de la Institución de Egreso</label>
              <select required name="respuesta[s4_p8]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p8', optional($respuestas)['s4_p8']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p8', optional($respuestas)['s4_p8']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p8', optional($respuestas)['s4_p8']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p8', optional($respuestas)['s4_p8']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p8', optional($respuestas)['s4_p8']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Conocimiento de Idiomas Extranjeros</label>
              <select required name="respuesta[s4_p9]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p9', optional($respuestas)['s4_p9']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p9', optional($respuestas)['s4_p9']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p9', optional($respuestas)['s4_p9']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p9', optional($respuestas)['s4_p9']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p9', optional($respuestas)['s4_p9']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Recomendaciones/ referencias</label>
              <select required name="respuesta[s4_p10]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p10', optional($respuestas)['s4_p10']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p10', optional($respuestas)['s4_p10']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p10', optional($respuestas)['s4_p10']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p10', optional($respuestas)['s4_p10']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p10', optional($respuestas)['s4_p10']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Personalidad/ Actitudes</label>
              <select required name="respuesta[s4_p11]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p11', optional($respuestas)['s4_p11']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p11', optional($respuestas)['s4_p11']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p11', optional($respuestas)['s4_p11']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p11', optional($respuestas)['s4_p11']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p11', optional($respuestas)['s4_p11']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Capacidad de liderazgo</label>
              <select required name="respuesta[s4_p12]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p12', optional($respuestas)['s4_p12']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p12', optional($respuestas)['s4_p12']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p12', optional($respuestas)['s4_p12']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p12', optional($respuestas)['s4_p12']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p12', optional($respuestas)['s4_p12']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
        
            <div class="w-full flex items-center gap-20">
              <label class="w-72 text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">-Otros</label>
              <select required name="respuesta[s4_p13]" class="w-52 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                <option value="" selected disabled>Selecciona una opción</option>
                <option value="Demasiado" @selected(old('s4_p13', optional($respuestas)['s4_p13']) == "Demasiado")>Demasiado (5)</option>
                <option value="Mucho" @selected(old('s4_p13', optional($respuestas)['s4_p13']) == "Mucho")>Mucho (4)</option>
                <option value="Más o menos" @selected(old('s4_p13', optional($respuestas)['s4_p13']) == "Más o menos")>Más o menos (3)</option>
                <option value="Poco" @selected(old('s4_p13', optional($respuestas)['s4_p13']) == "Poco")>Poco (2)</option>
                <option value="Muy poco" @selected(old('s4_p13', optional($respuestas)['s4_p13']) == "Muy poco")>Muy poco (1)</option>
              </select>
            </div>
          </div>
        </div>
      <!-- Botón al final -->
      <div class="flex justify-end mt-8 mr-12">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
        text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Terminar Sección
        </button>
      </div>
    </form>
  </div>
  </form>
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