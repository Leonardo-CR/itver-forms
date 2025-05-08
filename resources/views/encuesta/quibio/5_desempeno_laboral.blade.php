<x-layouts.app>
    
<!-- Contenedor principal Seccion 12-->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Desempeño Laboral</h5>
    <form action="{{ route('quibio.store') }}" method="POST"  id="formulario">
        @csrf
        @method('POST')     
    <!-- Pregunta 1-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> En tu desempeño laboral, ¿Cuál(es) de las siguientes herramientas utilizas?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="documentos_tecnicos" type="checkbox" value="Documentos técnicos" name="respuesta[s12_p1][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p1', optional($respuestas)['s12_p1'] ?? [])) && in_array('Documentos técnicos', old('s12_p1', optional($respuestas)['s12_p1'] ?? [])))) checked @endif>
                  <label for="documentos_tecnicos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Documentos técnicos</label>
              </div>
              <div class="flex items-center">
                  <input id="planos_ingenieria" type="checkbox" value="Planos de Ingeniería" name="respuesta[s12_p1][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p1', optional($respuestas)['s12_p1'] ?? [])) && in_array('Planos de Ingeniería', old('s12_p1', optional($respuestas)['s12_p1'] ?? [])))) checked @endif>
                  <label for="planos_ingenieria" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Planos de Ingeniería</label>
              </div>
              <div class="flex items-center">
                  <input id="normas" type="checkbox" value="Normas Nacionales y/o Internacionales" name="respuesta[s12_p1][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p1', optional($respuestas)['s12_p1'] ?? [])) && in_array('Normas Nacionales y/o Internacionales', old('s12_p1', optional($respuestas)['s12_p1'] ?? [])))) checked @endif>
                  <label for="normas" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Normas Nacionales y/o Internacionales</label>
              </div>
              <div class="flex items-center">
                  <input id="softwares" type="checkbox" value="Softwares" name="respuesta[s12_p1][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p1', optional($respuestas)['s12_p1'] ?? [])) && in_array('Softwares', old('s12_p1', optional($respuestas)['s12_p1'] ?? [])))) checked @endif>
                  <label for="softwares" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Softwares</label>
              </div>
              <div class="flex items-center">
                  <input id="otras" type="checkbox" value="Otras" name="respuesta[s12_p1][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p1', optional($respuestas)['s12_p1'] ?? [])) && in_array('Otras', old('s12_p1', optional($respuestas)['s12_p1'] ?? [])))) checked @endif>
                  <label for="otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 2 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Colaboras actualmente en proyectos de investigación y/o desarrollo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input required id="si" type="radio" value="Si" @if(old('s12_p2', optional($respuestas)['s12_p2']) == "Si") checked @endif name="respuesta[s12_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="si" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input required id="no" type="radio" value="No" @if(old('s12_p2', optional($respuestas)['s12_p2']) == "No") checked @endif name="respuesta[s12_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="no" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      

<!-- Pregunta 3 - Oculto inicialmente -->
<div id="tipo-investigacion-container" class="hidden my-6">
    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">En caso de ser POSITIVA la respuesta anterior, especifique el tipo de investigación y/o desarrollo</label>
    <div class="grid gap-4 md:grid-cols-1">
        <div class="flex items-center">
            <input id="aplicada" type="radio" value="Aplicada" @if(old('s12_p3', optional($respuestas)['s12_p3']) == "Aplicada") checked @endif name="respuesta[s12_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="aplicada" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicada</label>
        </div>
        <div class="flex items-center">
            <input id="experimental" type="radio" value="Experimental" @if(old('s12_p3', optional($respuestas)['s12_p3']) == "Experimental") checked @endif name="respuesta[s12_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="experimental" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Experimental</label>
        </div>
        <div class="flex items-center">
            <input id="documental" type="radio" value="Documental" @if(old('s12_p3', optional($respuestas)['s12_p3']) == "Documental") checked @endif name="respuesta[s12_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="documental" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Documental</label>
        </div>
        <div class="flex items-center">
            <input id="descriptiva" type="radio" value="Descriptiva" @if(old('s12_p3', optional($respuestas)['s12_p3']) == "Descriptiva") checked @endif name="respuesta[s12_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="descriptiva" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descriptiva</label>
        </div>
        <div class="flex items-center">
            <input id="otras2" type="radio" value="Otras" @if(old('s12_p3', optional($respuestas)['s12_p3']) == "Otras") checked @endif name="respuesta[s12_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="otras2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
        </div>
        
        <!-- Campo de texto para "Otras" (oculto inicialmente) -->
        <div id="otras-especificacion-container" class="hidden mt-2">
            <label for="otras-especificacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especifique otro tipo de investigación:</label>
            <input type="text" id="otras-especificacion" name="respuesta[s12_p3_otras]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Especifique aquí">
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elementos de la pregunta 2
    const radioSi = document.getElementById('si');
    const radioNo = document.getElementById('no');
    const tipoInvestigacionContainer = document.getElementById('tipo-investigacion-container');
    
    // Elementos de la pregunta 3 (otras)
    const radioOtras = document.getElementById('otras2');
    const otrasEspecificacionContainer = document.getElementById('otras-especificacion-container');
    const radiosTipoInvestigacion = document.querySelectorAll('input[name="respuesta[s12_p3]"]');
    
    // Función para manejar cambios en la pregunta 2
    function handleInvestigacionChange() {
        if (radioSi.checked) {
            tipoInvestigacionContainer.classList.remove('hidden');
        } else {
            tipoInvestigacionContainer.classList.add('hidden');
            // Limpiar selecciones si se elige "No"
            radiosTipoInvestigacion.forEach(radio => {
                radio.checked = false;
            });
            otrasEspecificacionContainer.classList.add('hidden');
            document.getElementById('otras-especificacion').value = '';
        }
    }
    
    // Función para manejar cambios en la pregunta 3 (otras)
    function handleOtrasChange() {
        if (radioOtras.checked) {
            otrasEspecificacionContainer.classList.remove('hidden');
        } else {
            otrasEspecificacionContainer.classList.add('hidden');
            document.getElementById('otras-especificacion').value = '';
        }
    }
    
    // Event listeners para pregunta 2
    radioSi.addEventListener('change', handleInvestigacionChange);
    radioNo.addEventListener('change', handleInvestigacionChange);
    
    // Event listeners para pregunta 3
    radioOtras.addEventListener('change', handleOtrasChange);
    radiosTipoInvestigacion.forEach(radio => {
        if (radio.id !== 'otras2') {
            radio.addEventListener('change', function() {
                otrasEspecificacionContainer.classList.add('hidden');
                document.getElementById('otras-especificacion').value = '';
            });
        }
    });
    
    // Establecer estado inicial
    handleInvestigacionChange();
    handleOtrasChange();
});
</script>

  
      <!-- Pregunta 4-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Perteneces o participas en redes de colaboración?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="si_dos" type="radio" value="Si" @if(old('s12_p4', optional($respuestas)['s12_p4']) == "Si") checked @endif name="respuesta[s12_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="si_dos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="no_dos" type="radio" value="No" @if(old('s12_p4', optional($respuestas)['s12_p4']) == "No") checked @endif name="respuesta[s12_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="no_dos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <!-- Pregunta 5-->
<div class="my-6">
    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuenta con alguna certificación vigente nacional y/o internacional?</label>
    <div class="grid gap-4 md:grid-cols-1">
        <div class="flex items-center">
            <input id="si_tres" type="radio" value="Si" @if(old('s12_p5', optional($respuestas)['s12_p5']) == "Si") checked @endif name="respuesta[s12_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="si_tres" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
        </div>
        <div class="flex items-center">
            <input id="no_tres" type="radio" value="No" @if(old('s12_p5', optional($respuestas)['s12_p5']) == "No") checked @endif name="respuesta[s12_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="no_tres" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
        </div>
    </div>
</div>

<!-- Pregunta 6-->
<div id="certificacion-especificacion-container" class="hidden my-6">
    <label for="mensaje" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que la respuesta anterior sea POSITIVA, especifica.</label>
    <textarea id="mensaje" name="respuesta[s12_p6]" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras">
        {{ old('s12_p6', optional($respuestas)['s12_p6']) }}
    </textarea>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtener elementos relevantes
    const radioSi = document.getElementById('si_tres');
    const radioNo = document.getElementById('no_tres');
    const especificacionContainer = document.getElementById('certificacion-especificacion-container');
    
    // Función para manejar cambios en los radio buttons
    function handleCertificacionChange() {
        if (radioSi.checked) {
            especificacionContainer.classList.remove('hidden');
        } else {
            especificacionContainer.classList.add('hidden');
            // Opcional: Limpiar el textarea cuando se selecciona "No"
            document.getElementById('mensaje').value = '';
        }
    }
    
    // Añadir event listeners a los radio buttons
    radioSi.addEventListener('change', handleCertificacionChange);
    radioNo.addEventListener('change', handleCertificacionChange);
    
    // Ejecutar al cargar la página para establecer el estado inicial
    handleCertificacionChange();
});
</script>
  
      <!-- Pregunta 7-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Ofreces alguno de los siguientes servicios?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="asesoria_consulta" type="checkbox" value="Asesoría y/o consultoría" name="respuesta[s12_p7][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p7', optional($respuestas)['s12_p7'] ?? [])) && in_array('Asesoría y/o consultoría', old('s12_p7', optional($respuestas)['s12_p7'] ?? [])))) checked @endif>
                  <label for="asesoria_consulta" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asesoría y/o consultoría</label>
              </div>
              <div class="flex items-center">
                  <input id="peritaje" type="checkbox" value="Peritaje" name="respuesta[s12_p7][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p7', optional($respuestas)['s12_p7'] ?? [])) && in_array('Peritaje', old('s12_p7', optional($respuestas)['s12_p7'] ?? [])))) checked @endif>
                  <label for="peritaje" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Peritaje</label>
              </div>
              <div class="flex items-center">
                  <input id="certificacion" type="checkbox" value="Certificación" name="respuesta[s12_p7][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p7', optional($respuestas)['s12_p7'] ?? [])) && in_array('Certificación', old('s12_p7', optional($respuestas)['s12_p7'] ?? [])))) checked @endif>
                  <label for="certificacion" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Certificación</label>
              </div>
              <div class="flex items-center">
                  <input id="ninguno" type="checkbox" value="Ninguno" name="respuesta[s12_p7][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p7', optional($respuestas)['s12_p7'] ?? [])) && in_array('Ninguno', old('s12_p7', optional($respuestas)['s12_p7'] ?? [])))) checked @endif>
                  <label for="ninguno" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ninguno</label>
              </div>
              <div class="flex items-center">
                  <input id="otras3" type="checkbox" value="Otras" name="respuesta[s12_p7][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p7', optional($respuestas)['s12_p7'] ?? [])) && in_array('Otras', old('s12_p7', optional($respuestas)['s12_p7'] ?? [])))) checked @endif>
                  <label for="otras3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 8 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál de las siguientes lenguas extranjeras utilizas en tu actividad laboral?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="ingles" type="checkbox" value="Inglés" name="respuesta[s12_p8][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p8', optional($respuestas)['s12_p8'] ?? [])) && in_array('Inglés', old('s12_p8', optional($respuestas)['s12_p8'] ?? [])))) checked @endif>
                  <label for="ingles" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inglés</label>
              </div>
              <div class="flex items-center">
                  <input id="frances" type="checkbox" value="Francés" name="respuesta[s12_p8][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p8', optional($respuestas)['s12_p8'] ?? [])) && in_array('Francés', old('s12_p8', optional($respuestas)['s12_p8'] ?? [])))) checked @endif>
                  <label for="frances" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Francés</label>
              </div>
              <div class="flex items-center">
                  <input id="aleman" type="checkbox" value="Aleman" name="respuesta[s12_p8][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p8', optional($respuestas)['s12_p8'] ?? [])) && in_array('Aleman', old('s12_p8', optional($respuestas)['s12_p8'] ?? [])))) checked @endif>
                  <label for="aleman" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aleman</label>
              </div>
              <div class="flex items-center">
                  <input id="italiano" type="checkbox" value="Italiano" name="respuesta[s12_p8][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p8', optional($respuestas)['s12_p8'] ?? [])) && in_array('Italiano', old('s12_p8', optional($respuestas)['s12_p8'] ?? [])))) checked @endif>
                  <label for="italiano" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Italiano</label>
              </div>
              <div class="flex items-center">
                  <input id="otras4" type="checkbox" value="Otros" name="respuesta[s12_p8][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p8', optional($respuestas)['s12_p8'] ?? [])) && in_array('Otros', old('s12_p8', optional($respuestas)['s12_p8'] ?? [])))) checked @endif>
                  <label for="otras4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
              </div>
          </div>
      </div>
  
      <!-- Pregunta 9 -->
<div class="my-6">
    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Has realizado o colaborado con alguna publicación de un artículo en revista científica y/o de divulgación?</label>
    <div class="grid gap-4 md:grid-cols-1">
        <div class="flex items-center">
            <input id="si_cuatro" type="radio" value="Si" @if(old('s12_p9', optional($respuestas)['s12_p9']) == "Si") checked @endif name="respuesta[s12_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="si_cuatro" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
        </div>
        <div class="flex items-center">
            <input id="no_cuatro" type="radio" value="No" @if(old('s12_p9', optional($respuestas)['s12_p9']) == "No") checked @endif name="respuesta[s12_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="no_cuatro" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
        </div>
    </div>
</div>

<!-- Pregunta 10 - Oculto inicialmente -->
<div id="publicacion-especificacion-container" class="hidden my-6">
    <label for="mensaje_dos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que la respuesta anterior sea POSITIVA, especifica.</label>
    <textarea id="mensaje_dos" name="respuesta[s12_p10]" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras">
        {{ old('s12_p10', optional($respuestas)['s12_p10']) }}
    </textarea>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elementos de la pregunta 9
    const radioSiPublicacion = document.getElementById('si_cuatro');
    const radioNoPublicacion = document.getElementById('no_cuatro');
    const publicacionEspecContainer = document.getElementById('publicacion-especificacion-container');
    
    // Función para manejar cambios en la pregunta 9
    function handlePublicacionChange() {
        if (radioSiPublicacion.checked) {
            publicacionEspecContainer.classList.remove('hidden');
        } else {
            publicacionEspecContainer.classList.add('hidden');
            // Limpiar el textarea cuando se selecciona "No"
            document.getElementById('mensaje_dos').value = '';
        }
    }
    
    // Event listeners para pregunta 9
    radioSiPublicacion.addEventListener('change', handlePublicacionChange);
    radioNoPublicacion.addEventListener('change', handlePublicacionChange);
    
    // Establecer estado inicial
    handlePublicacionChange();
});

// Nota: Corregí el ID del textarea de "mendaje_dos" a "mensaje_dos" para coincidir con el "for" del label
</script>
  
      <!-- Pregunta 11 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿En cuál de los siguientes documentos has participado en su elaboración?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="manuales_operativos" type="checkbox" value="Manuales operativos" name="respuesta[s12_p11][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p11', optional($respuestas)['s12_p11'] ?? [])) && in_array('Manuales operativos', old('s12_p11', optional($respuestas)['s12_p11'] ?? [])))) checked @endif>
                  <label for="manuales_operativos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manuales operativos</label>
              </div>
              <div class="flex items-center">
                  <input id="procedimientos" type="checkbox" value="Procedimientos" name="respuesta[s12_p11][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p11', optional($respuestas)['s12_p11'] ?? [])) && in_array('Procedimientos', old('s12_p11', optional($respuestas)['s12_p11'] ?? [])))) checked @endif>
                  <label for="procedimientos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Procedimientos</label>
              </div>
              <div class="flex items-center">
                  <input id="lineamientos" type="checkbox" value="Lineamientos" name="respuesta[s12_p11][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p11', optional($respuestas)['s12_p11'] ?? [])) && in_array('Lineamientos', old('s12_p11', optional($respuestas)['s12_p11'] ?? [])))) checked @endif>
                  <label for="lineamientos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lineamientos</label>
              </div>
              <div class="flex items-center">
                  <input id="informes_tecnicos" type="checkbox" value="Informes técnicos" name="respuesta[s12_p11][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  @if((is_array(old('s12_p11', optional($respuestas)['s12_p11'] ?? [])) && in_array('Informes técnicos', old('s12_p11', optional($respuestas)['s12_p11'] ?? [])))) checked @endif>
                  <label for="informes_tecnicos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informes técnicos</label>
              </div>
              <div class="flex items-center">
                  <input id="otras5" type="checkbox" value="Otros" name="respuesta[s12_p11][]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                   @if((is_array(old('s12_p11', optional($respuestas)['s12_p11'] ?? [])) && in_array('Otros', old('s12_p11', optional($respuestas)['s12_p11'] ?? [])))) checked @endif>
                  <label for="otras5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
              </div>
          
          </div>
      </div>
  
      <!-- Pregunta 12 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Qué sistema de gestión de calidad aplicas en tu actividad laboral?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="calidad" type="radio" value="Calidad" @if(old('s12_p12', optional($respuestas)['s12_p12']) == "Calidad") checked @endif name="respuesta[s12_p12]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="calidad" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Calidad</label>
              </div>
              <div class="flex items-center">
                  <input id="ambiental" type="radio" value="Ambiental" @if(old('s12_p12', optional($respuestas)['s12_p12']) == "Ambiental") checked @endif name="respuesta[s12_p12]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="ambiental" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ambiental</label>
              </div>
              <div class="flex items-center">
                  <input id="seguridad" type="radio" value="Seguridad" @if(old('s12_p12', optional($respuestas)['s12_p12']) == "Seguridad") checked @endif name="respuesta[s12_p12]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="seguridad" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seguridad</label>
              </div>
              <div class="flex items-center">
                  <input id="otras6" type="radio" value="Otras" @if(old('s12_p12', optional($respuestas)['s12_p12']) == "Otras") checked @endif name="respuesta[s12_p12]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="otras6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
          </div>
      </div>
  
     <!-- Pregunta 13 -->
<div class="my-6">
    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Perteneces a alguna asociación profesional relacionada con tu carrera?</label>
    <div class="grid gap-4 md:grid-cols-1">
        <div class="flex items-center">
            <input id="si_cinco" type="radio" value="Si" @if(old('s12_p13', optional($respuestas)['s12_p13']) == "Si") checked @endif name="respuesta[s12_p13]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="si_cinco" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
        </div>
        <div class="flex items-center">
            <input id="no_cinco" type="radio" value="No" @if(old('s12_p13', optional($respuestas)['s12_p13']) == "No") checked @endif name="respuesta[s12_p13]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="no_cinco" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
        </div>
    </div>
</div>

<!-- Pregunta 14 -->
<div id="asociacion-especificacion-container" class="hidden my-6">
    <label for="mensaje_tres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que tu respuesta de la pregunta anterior sea POSITIVA, especifica a que asociación perteneces.</label>
    <textarea id="mensaje_tres" name="respuesta[s12_p14]" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras">
        {{ old('s12_p14', optional($respuestas)['s12_p14']) }}
    </textarea>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtener elementos relevantes
    const radioSi = document.getElementById('si_cinco');
    const radioNo = document.getElementById('no_cinco');
    const especificacionContainer = document.getElementById('asociacion-especificacion-container');
    
    // Función para manejar cambios en los radio buttons
    function handleAsociacionChange() {
        if (radioSi.checked) {
            especificacionContainer.classList.remove('hidden');
        } else {
            especificacionContainer.classList.add('hidden');
            // Limpiar el textarea cuando se selecciona "No"
            document.getElementById('mensaje_tres').value = '';
        }
    }
    
    // Añadir event listeners a los radio buttons
    radioSi.addEventListener('change', handleAsociacionChange);
    radioNo.addEventListener('change', handleAsociacionChange);
    
    // Ejecutar al cargar la página para establecer el estado inicial
    handleAsociacionChange();
});
</script>
  
      <!-- Pregunta 15 -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Desde tu punto de vista, el aporte de ética en un ambiente laboral consiste en:</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="normas_basicas" type="radio" value="Aplicar las Normas básicas de una empresa" @if(old('s12_p15', optional($respuestas)['s12_p15']) == "Aplicar las Normas básicas de una empresa") checked @endif name="respuesta[s12_p15]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="normas_basicas" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicar las Normas básicas de una empresa</label>
              </div>
              <div class="flex items-center">
                  <input id="aplicar_reglas" type="radio" value="Aplicar reglas de cortesía que demuestran respeto por los demás" @if(old('s12_p15', optional($respuestas)['s12_p15']) == "Aplicar reglas de cortesía que demuestran respeto por los demás") checked @endif name="respuesta[s12_p15]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="aplicar_reglas" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicar reglas de cortesía que demuestran respeto por los demás</label>
              </div>
              <div class="flex items-center">
                  <input id="asumir_comportamiento" type="radio" value="Asumir un comportamiento adecuado para la buena convivencia" @if(old('s12_p15', optional($respuestas)['s12_p15']) == "Asumir un comportamiento adecuado para la buena convivencia") checked @endif name="respuesta[s12_p15]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="asumir_comportamiento" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asumir un comportamiento adecuado para la buena convivencia</label>
              </div>
              <div class="flex items-center">
                  <input id="establecer_serie" type="radio" value="Establecer una serie de normas como guía de conducta" @if(old('s12_p15', optional($respuestas)['s12_p15']) == "Establecer una serie de normas como guía de conducta") checked @endif name="respuesta[s12_p15]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="establecer_serie" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Establecer una serie de normas como guía de conducta</label>
              </div>
              <div class="flex items-center">
                  <input id="ninguno_dos" type="radio" value="Ninguna de las anteriore" @if(old('s12_p15', optional($respuestas)['s12_p15']) == "Ninguna de las anteriore") checked @endif name="respuesta[s12_p15]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="ninguno_dos" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ninguna de las anteriores</label>
              </div>
          </div>
      </div>
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Terminar Seccion
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