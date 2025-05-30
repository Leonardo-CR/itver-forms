<x-layouts.app>

  <div href="#" class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
      <h5 class="mb-2 text-2xl uppercase font-bold tracking-tight text-gray-900 dark:text-white">ubicación laboral de los egresados</h5>   
      <form id="formulario" action="{{ route('general.store') }}" method="POST">
        @csrf
        @method('POST')
        <!-- FILA 1-->
        <div class="mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Actividad a la que se dedica actualmente:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input required id="ans1" type="radio" value="Trabaja" @if(old('s3_p1', optional($respuestas)['s3_p1']) == "Trabaja") checked @endif name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Trabaja</label>
            </div>
            <div>
              <input required id="ans2" type="radio" value="Estudia" @if(old('s3_p1', optional($respuestas)['s3_p1']) == "Estudia") checked @endif name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estudia</label>
            </div>
            <div>
              <input required id="ans3" type="radio" value="Estudia y trabaja" @if(old('s3_p1', optional($respuestas)['s3_p1']) == "Estudia y trabaja") checked @endif name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estudia y trabaja</label>
            </div>
            <div>
              <input required id="ans4" type="radio" value="No estudia ni trabaja" @if(old('s3_p1', optional($respuestas)['s3_p1']) == "No estudia ni trabaja") checked @endif name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No estudia ni trabaja</label>
            </div>
          </div>
        </div>
        <!-- FILA 2-->
        <div class="content-option Estudia Estudia-y-trabaja mb-6 hidden">
          <label for="ans5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Si estudia, indicar si es:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans5" type="radio" value="Especialidad" @if(old('s3_p2', optional($respuestas)['s3_p2']) == "Especialidad") checked @endif name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Especialidad</label>
            </div>
            <div>
              <input id="ans6" type="radio" value="Maestria" @if(old('s3_p2', optional($respuestas)['s3_p2']) == "Maestria") checked @endif name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maestria</label>
            </div>
            <div>
              <input id="ans7" type="radio" value="Doctorado" @if(old('s3_p2', optional($respuestas)['s3_p2']) == "Doctorado") checked @endif name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Doctorado</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Idiomas" @if(old('s3_p2', optional($respuestas)['s3_p2']) == "Idiomas") checked @endif name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Idiomas</label>
            </div>
          </div>
          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="otro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
                <input type="text" name="respuesta[s3_p3]" value="{{ old('s3_p3', optional($respuestas)['s3_p3']) }}" id="otro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Matricula"  />
            </div>  
            <div>
                <label for="esp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad e Institución:</label>
                <input type="text" name="respuesta[s3_p4]" value="{{ old('s3_p4', optional($respuestas)['s3_p4']) }}" id="esp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Unitec"  />
            </div>  
          </div>
        </div>
        <!-- FILA 3-->
        <div class="content-option Trabaja mb-6 hidden Estudia-y-trabaja">
          <label for="ans9" class="  block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de trabajar. Tiempo Transcurrido para obtener el primer empleo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans9" type="radio" value="Antes de Egresar" @if(old('s3_p5', optional($respuestas)['s3_p5']) == "Antes de Egresar") checked @endif name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antes de Egresar</label>
            </div>
            <div>
              <input id="ans10" type="radio" value="Menos de seis meses" @if(old('s3_p5', optional($respuestas)['s3_p5']) == "Menos de seis meses") checked @endif name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de seis meses</label>
            </div>
            <div>
              <input id="ans11" type="radio" value="Entre seis meses y un año" @if(old('s3_p5', optional($respuestas)['s3_p5']) == "Entre seis meses y un añ") checked @endif name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans11" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entre seis meses y un año</label>
            </div>
            <div>
              <input id="ans12" type="radio" value="Más de un año" @if(old('s3_p5', optional($respuestas)['s3_p5']) == "Más de un año") checked @endif name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans12" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de un año</label>
            </div>
          </div>
        </div>
        <!-- FILA 4-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans13" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medio para Obtener el Empleo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="option1" type="radio" value="Bolsa de trabajo del plantel" @if(old('s3_p6', optional($respuestas)['s3_p6']) == "Bolsa de trabajo del plantel") checked @endif name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans13" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bolsa de trabajo del plantel</label>
            </div>
            <div>
              <input id="option2" type="radio" value="Contactos personales" @if(old('s3_p6', optional($respuestas)['s3_p6']) == "Contactos personales") checked @endif name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans14" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contactos personales</label>
            </div>
            <div>
              <input id="option3" type="radio" value="Residencia Profesional" @if(old('s3_p6', optional($respuestas)['s3_p6']) == "Residencia Profesional") checked @endif name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans15" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Residencia Profesional</label>
            </div>
            <div>
              <input id="option4" type="radio" value="Medios masivos de comunicación" @if(old('s3_p6', optional($respuestas)['s3_p6']) == "Medios masivos de comunicación") checked @endif name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medios masivos de comunicación</label>
            </div>
            <div>
              <input id="optionMostrar" type="radio" value="Otro" @if(old('s3_p6', optional($respuestas)['s3_p6']) == "Otro") checked @endif name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otro</label>
            </div>
          </div>
        </div>
        <!-- FILA 5-->
        <div id="contentDiv" class="content-option hidden mb-6">
            <label for="otro2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especifique:</label>
            <input type="text" name="respuesta[s3_p7]" value="{{ old('s3_p7', optional($respuestas)['s3_p7']) }}" id="ans_s3_p7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Recomendación profesional"  />
        </div>  
        <!-- FILA 6-->
       
         <!-- FILA 1-->
      <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Requisitos de contratación:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="op" type="radio" value="Competencias laborales" @if(old('s3_p8', optional($respuestas)['s3_p8']) == "Competencias laborales") checked @endif name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Competencias laborales</label>
            </div>
            <div>
              <input id="opa" type="radio" value="Título Profesional" @if(old('s3_p8', optional($respuestas)['s3_p8']) == "Título Profesional") checked @endif name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título Profesional</label>
            </div>
            <div>
              <input id="opc" type="radio" value="Examen de selección" @if(old('s3_p8', optional($respuestas)['s3_p8']) == "Examen de selección") checked @endif name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Examen de selección</label>
            </div>
            <div>
              <input id="opax" type="radio" value="Idioma Extranjero" @if(old('s3_p8', optional($respuestas)['s3_p8']) == "Idioma Extranjero") checked @endif name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Idioma Extranjero</label>
            </div>
            <div>
              <input id="ans5" type="radio" value="Actitudes y habilidades socio-comunicativas  (principios y valores)" @if(old('s3_p8', optional($respuestas)['s3_p8']) == "Actitudes y habilidades socio-comunicativas  (principios y valores)") checked @endif name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Actitudes y habilidades socio-comunicativas  (principios y valores)</label>
            </div>
            <div>
              <input id="ans6" type="radio" value="Ninguno" @if(old('s3_p8', optional($respuestas)['s3_p8']) == "Ninguno") checked @endif name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ninguno</label>
            </div>
          </div>
          <div>
            <label for="otro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
            <input type="text" name="respuesta[s3_p9]" value="{{ old('s3_p9', optional($respuestas)['s3_p9']) }}" id="otro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Conocimientos técnicos especificos tales como ..."  />
          </div>
        </div>
        <!-- FILA 2-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans7" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Idioma que utiliza en su trabajo</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans7" type="radio" value="Inglés" @if(old('s3_p10', optional($respuestas)['s3_p10']) == "Inglés") checked @endif name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inglés</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Francés" @if(old('s3_p10', optional($respuestas)['s3_p10']) == "Francés") checked @endif name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Francés</label>
            </div>
            <div>
              <input id="ans9" type="radio" value="Alemán" @if(old('s3_p10', optional($respuestas)['s3_p10']) == "Alemán") checked @endif name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alemán</label>
            </div>
            <div>
              <input id="ans10" type="radio" value="Japonés" @if(old('s3_p10', optional($respuestas)['s3_p10']) == "Japonés") checked @endif name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Japonés</label>
            </div>   
          </div>
          <div class="content-option Trabaja Estudia-y-trabaja hidden" >
              <label for="otro2" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
              <input type="text" name="respuesta[s3_p11]" value="{{ old('s3_p11', optional($respuestas)['s3_p11']) }}" id="otro2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Turco"  />
          </div>
        </div>
        <!-- FILA 3-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="hablar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del  idioma extranjero</label>
          <div class="grid gap-6 mb-6 md:grid-cols-4">
            <div>
              <label for="hablar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hablar:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="hablar" name="respuesta[s3_p12]" value="{{ old('s3_p12', optional($respuestas)['s3_p12']) }}" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="50"  />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>
            </div>
            <div>
              <label for="escribir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escribir:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="escribir" name="respuesta[s3_p13]" value="{{ old('s3_p13', optional($respuestas)['s3_p13']) }}" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10"  />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>          
            </div>
            <div>
              <label for="leer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Leer:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="leer" name="respuesta[s3_p14]" value="{{ old('s3_p14', optional($respuestas)['s3_p14']) }}" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="20"  />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>
            </div>
            <div>
              <label for="escuchar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escuchar:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="escuchar" name="respuesta[s3_p15]" value="{{ old('s3_p15', optional($respuestas)['s3_p15']) }}" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="20"  />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>          
            </div>
          </div>
        </div>    
        <!-- FILA 6-->
      
         <!-- FILA 1-->
      <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Antigüedad en el empleo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value="Menos de un año" @if(old('s3_p16', optional($respuestas)['s3_p16']) == "Menos de un año") checked @endif name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de un año</label>
            </div>
            <div>
              <input id="ans2" type="radio" value="Un año" @if(old('s3_p16', optional($respuestas)['s3_p16']) == "Un año") checked @endif name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Un año</label>
            </div>
            <div>
              <input id="ans3" type="radio" value="Dos años" @if(old('s3_p16', optional($respuestas)['s3_p16']) == "Dos años") checked @endif name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dos años</label>
            </div>
            <div>
              <input id="ans4" type="radio" value="Tres Años" @if(old('s3_p16', optional($respuestas)['s3_p16']) == "Tres Años") checked @endif name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tres Años</label>
            </div>
            <div>
              <input id="ans5" type="radio" value="Más de tres años" @if(old('s3_p16', optional($respuestas)['s3_p16']) == "Más de tres años") checked @endif name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de tres años</label>
            </div>
          </div>
          <div class="content-option Trabaja Estudia-y-trabaja hidden">
            <label for="otro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de ingreso:</label>
            <input type="text" id="otro" name="respuesta[s3_p17]" value="{{ old('s3_p17', optional($respuestas)['s3_p17']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2016"  />
          </div>
        </div>
        <!-- FILA 2-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-4">
          <label for="ans6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingreso (salario mínimo diario):</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans6" type="radio" value="Menos de cinco" @if(old('s3_p18', optional($respuestas)['s3_p18']) == "Menos de cinco") checked @endif name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de cinco</label>
            </div>
            <div>
              <input id="ans7" type="radio" value="Entre cinco y siete" @if(old('s3_p18', optional($respuestas)['s3_p18']) == "Entre cinco y siete") checked @endif name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entre cinco y siete</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Entre 8 y 10" @if(old('s3_p18', optional($respuestas)['s3_p18']) == "Entre 8 y 10") checked @endif name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entre 8 y 10</label>
            </div>
            <div>
              <input id="ans9" type="radio" value="Más de 10" @if(old('s3_p18', optional($respuestas)['s3_p18']) == "Más de 10") checked @endif name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de 10</label>
            </div>   
          </div>
        </div>
        <!-- FILA 3-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-4">
          <label for="ans10" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel jerárquico en el trabajo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans10" type="radio" value="Técnico" @if(old('s3_p19', optional($respuestas)['s3_p19']) == "Técnico") checked @endif name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Técnico</label>
            </div>
            <div>
              <input id="ans11" type="radio" value="Supervisor" @if(old('s3_p19', optional($respuestas)['s3_p19']) == "Supervisor") checked @endif name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans11" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supervisor</label>
            </div>
            <div>
              <input id="ans12" type="radio" value="Jefe de área" @if(old('s3_p19', optional($respuestas)['s3_p19']) == "Jefe de área") checked @endif name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans12" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jefe de área</label>
            </div>
            <div>
              <input id="ans13" type="radio" value="Funcionario" @if(old('s3_p19', optional($respuestas)['s3_p19']) == "Funcionario") checked @endif name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans13" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Funcionario</label>
            </div>
            <div>
              <input id="ans14" type="radio" value="Directivo" @if(old('s3_p19', optional($respuestas)['s3_p19']) == "Directivo") checked @endif name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans14" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Directivo</label>
            </div>
            <div>
              <input id="ans15" type="radio" value="Empresario" @if(old('s3_p19', optional($respuestas)['s3_p19']) == "Empresario") checked @endif name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans15" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Empresario</label>
            </div>
          </div>
        </div>
        <!-- FILA 4-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-4">
          <label for="ans16" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condición de Trabajo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans16" type="radio" value="Base" @if(old('s3_p20', optional($respuestas)['s3_p20']) == "Base") checked @endif name="respuesta[s3_p20]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Base</label>
            </div>
            <div>
              <input id="ans17" type="radio" value="Eventual" @if(old('s3_p20', optional($respuestas)['s3_p20']) == "Eventual") checked @endif name="respuesta[s3_p20]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans17" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eventual</label>
            </div>
            <div>
              <input id="ans18" type="radio" value="Contrato" @if(old('s3_p20', optional($respuestas)['s3_p20']) == "Contrato") checked @endif name="respuesta[s3_p20]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans18" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contrato</label>
            </div>
          </div>
          <div>
            <label for="otro2" class="content-option Trabaja Estudia-y-trabaja hidden block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
            <input type="text" id="otro2" name="respuesta[s3_p21]" value="{{ old('s3_p21', optional($respuestas)['s3_p21']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Auxiliar"  />
          </div>
        </div>
        <!-- FILA 5-->
        <div class="flex">
        </div>
        <!-- FILA 1-->
      <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans1" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relación del trabajo con su área de formación:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value=0 @if(old('s3_p22', optional($respuestas)['s3_p22']) == "0") checked @endif name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">0%</label>
            </div>
            <div>
              <input id="ans2" type="radio" value=20 @if(old('s3_p22', optional($respuestas)['s3_p22']) == "20") checked @endif name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">20%</label>
            </div>
            <div>
              <input id="ans3" type="radio" value=40 @if(old('s3_p22', optional($respuestas)['s3_p22']) == "40") checked @endif name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">40%</label>
            </div>
            <div>
              <input id="ans4" type="radio" value=60 @if(old('s3_p22', optional($respuestas)['s3_p22']) == "60") checked @endif name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">60%</label>
            </div>
            <div>
              <input id="ans5" type="radio" value=80 @if(old('s3_p22', optional($respuestas)['s3_p22']) == "80") checked @endif name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">80%</label>
            </div>
            <div class="content-option Trabaja Estudia-y-trabaja hidden">
              <input id="ans6" type="radio" value=100 @if(old('s3_p22', optional($respuestas)['s3_p22']) == "100") checked @endif name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">100%</label>
            </div>
          </div>
        </div>
        <!-- FILA 1-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6 ">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Datos de la empresa u organismo:</label>
          <label for="ans7" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organismo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans7" type="radio" value="Publico" @if(old('s3_p23', optional($respuestas)['s3_p23']) == "Publico") checked @endif name="respuesta[s3_p23]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publico</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Privado" @if(old('s3_p23', optional($respuestas)['s3_p23']) == "Privado") checked @endif name="respuesta[s3_p23]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Privado</label>
            </div>
            <div>
              <input id="ans9" type="radio" value="Social" @if(old('s3_p23', optional($respuestas)['s3_p23']) == "Social") checked @endif name="respuesta[s3_p23]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Social</label>
            </div>
          </div>
        </div>
        <!-- FILA 5-->
        <div class=" content-option Trabaja Estudia-y-trabaja hidden mb-6 ">
          <label for="giro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giro o actividad principal de la empresa u organismo:</label>
          <input type="text" id="giro" name="respuesta[s3_p24]" value="{{ old('s3_p24', optional($respuestas)['s3_p24']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Imprenta"  />
        </div>
        <!-- FILA 5-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="razon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Razón  Social:</label>
          <input type="text" id="razon" name="respuesta[s3_p25]" value="{{ old('s3_p25', optional($respuestas)['s3_p25']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Impresos Creativos del Golfo, S.A. de C.V."  />
        </div>
        <!-- FILA 5-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden grid gap-6 mb-6 md:grid-cols-3">
          <div>
            <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado:</label>
            <input type="text" id="estado" name="respuesta[s3_p26]" value="{{ old('s3_p26', optional($respuestas)['s3_p26']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz"  />
          </div>
          <div>
            <label for="municipio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipio:</label>
            <input type="text" id="municipio" name="respuesta[s3_p27]" value="{{ old('s3_p27', optional($respuestas)['s3_p27']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz"  />
          </div>
          <div>
            <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad:</label>
            <input type="text" id="ciudad" name="respuesta[s3_p28]" value="{{ old('s3_p28', optional($respuestas)['s3_p28']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz"  />
          </div>
        </div>
        <!-- FILA 6-->
        <div class="grid gap-6 mb-6 md:grid-cols-4 content-option Trabaja Estudia-y-trabaja hidden">
          <div>
            <label for="colonia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colonia:</label>
            <input type="text" id="colonia" name="respuesta[s3_p29]" value="{{ old('s3_p29', optional($respuestas)['s3_p29']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Infonavit Buenavista"  />
          </div>
          <div>
            <label for="cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C.P.:</label>
            <input type="text" id="cp" name="respuesta[s3_p30]" value="{{ old('s3_p30', optional($respuestas)['s3_p30']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="91850"  />
          </div>
          <div>
            <label for="calle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calle:</label>
            <input type="text" id="calle" name="respuesta[s3_p31]" value="{{ old('s3_p31', optional($respuestas)['s3_p31']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ahuehuete"  />
          </div>
          <div>
            <label for="no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.:</label>
            <input type="text" id="no" name="respuesta[s3_p32]" value="{{ old('s3_p32', optional($respuestas)['s3_p32']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="44"  />
          </div>
        </div>
        <!-- FILA 7-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <div class="flex w-full gap-4">
            <div class="basis-[30%]">
              <label for="lada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lada:</label>
              <input type="text" id="lada" name="respuesta[s3_p33]" value="{{ old('s3_p33', optional($respuestas)['s3_p33']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+52"  />
            </div>
            <div class="basis-[50%]">
              <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono:</label>
              <input type="text" id="tel" name="respuesta[s3_p34]" value="{{ old('s3_p34', optional($respuestas)['s3_p34']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2291411203"  />
            </div>
            <div class="basis-[20%]">
              <label for="ext" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ext.:</label>
              <input type="text" id="ext" name="respuesta[s3_p35]" value="{{ old('s3_p35', optional($respuestas)['s3_p35']) }}" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="800"  />
            </div>
          </div>  
        </div>
        <!-- FILA 7-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electronico:</label>
            <input type="text" id="correo" name="respuesta[s3_p36]" value="{{ old('s3_p36', optional($respuestas)['s3_p36']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="aaronsalasn@gmail.com"  />
          </div>
          <div>
            <label for="web" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Página Web:</label>
            <input type="text" id="web" name="respuesta[s3_p37]" value="{{ old('s3_p37', optional($respuestas)['s3_p37']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://creativosgolfo.com/"  />
          </div>
        </div>
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <div>
            <label for="jefe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre y Puesto del  Jefe Inmediato:</label>
            <input type="text" id="jefe" name="respuesta[s3_p38]" value="{{ old('s3_p38', optional($respuestas)['s3_p38']) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bruno Diaz, CEO"  />
          </div>
        </div>
        <!-- FILA 5-->
        
         <!-- FILA 1-->
      <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sector Económico de la Empresa u Organización</label>
          <p class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">sector primario:</p>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value="Agroindustria" @if(old('s3_p39', optional($respuestas)['s3_p39']) == "Agroindustria") checked @endif name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agroindustria</label>
            </div>
            <div>
              <input id="ans2" type="radio" value="Pesquero" @if(old('s3_p39', optional($respuestas)['s3_p39']) == "Pesquero") checked @endif name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pesquero</label>
            </div>
            <div>
              <input id="ans3" type="radio" value="Minero" @if(old('s3_p39', optional($respuestas)['s3_p39']) == "Minero") checked @endif name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Minero</label>
            </div>
            <div>
              <input id="ans4" type="radio" value="Otros" @if(old('s3_p39', optional($respuestas)['s3_p39']) == "Otros") checked @endif name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
            </div>        
          </div>    
        </div>
        <!-- FILA 2-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <p class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">sector secundario:</p>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans5" type="radio" value="Industrial" @if(old('s3_p40', optional($respuestas)['s3_p40']) == "Industrial") checked @endif name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Industrial</label>
            </div>
            <div>
              <input id="ans6" type="radio" value="Construcción" @if(old('s3_p40', optional($respuestas)['s3_p40']) == "Construcción") checked @endif name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Construcción</label>
            </div>
            <div>
              <input id="ans7" type="radio" value="Petrolero" @if(old('s3_p40', optional($respuestas)['s3_p40']) == "Petrolero") checked @endif name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Petrolero</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Otros" @if(old('s3_p40', optional($respuestas)['s3_p40']) == "Otros") checked @endif name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
            </div>        
          </div>
        </div>
        <!-- FILA 2-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <p class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">sector terciario:</p>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans9" type="radio" value="Educativo" @if(old('s3_p41', optional($respuestas)['s3_p41']) == "Educativo") checked @endif name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Educativo</label>
            </div>
            <div>
              <input id="ans10" type="radio" value="Turismo" @if(old('s3_p41', optional($respuestas)['s3_p41']) == "Turismo") checked @endif name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Turismo</label>
            </div>
            <div>
              <input id="ans11" type="radio" value="Comercio" @if(old('s3_p41', optional($respuestas)['s3_p41']) == "Comercio") checked @endif name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans11" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comercio</label>
            </div>
            <div>
              <input id="ans12" type="radio" value="Servicios Financieros" @if(old('s3_p41', optional($respuestas)['s3_p41']) == "Servicios Financieros") checked @endif name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans12" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Servicios Financieros</label>
            </div>
            <div>
              <input id="ans13" type="radio" value="Otros" @if(old('s3_p41', optional($respuestas)['s3_p41']) == "Otros") checked @endif name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans13" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
            </div>
          </div>
        </div>
        <!-- FILA 2-->
        <div class="content-option Trabaja Estudia-y-trabaja hidden mb-6">
          <label for="ans14" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tamaño de la empresa u organización</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans14" type="radio" value="Microempresa (1-30)" @if(old('s3_p42', optional($respuestas)['s3_p42']) == "Microempresa (1-30)") checked @endif name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans14" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Microempresa (1-30)</label>
            </div>
            <div>
              <input id="ans15" type="radio" value="Pequeña (31-100)" @if(old('s3_p42', optional($respuestas)['s3_p42']) == "Pequeña (31-100)") checked @endif name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans15" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pequeña (31-100)</label>
            </div>
            <div>
              <input id="ans16" type="radio" value="Mediana (101-500)" @if(old('s3_p42', optional($respuestas)['s3_p42']) == "Mediana (101-500)") checked @endif name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mediana (101-500)</label>
            </div>
            <div>
              <input id="ans17" type="radio" value="Grande (más de 500)" @if(old('s3_p42', optional($respuestas)['s3_p42']) == "Grande (más de 500)") checked @endif name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans17" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Grande (más de 500)</label>
            </div>        
          </div>
        </div>
        <!-- FILA 5-->
        <div class="flex">
          <button type="submit" class="ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Terminar Sección</button>
        </div>
      </form>
    </div>

    <script>
   // Función que oculta todos los divs con la clase "content-option"
function hideAllDivs() {
    const allDivs = document.querySelectorAll('.content-option');
    allDivs.forEach(div => {
        div.classList.add('hidden');
    });
}

// Función que muestra el div correspondiente según la clase
function showDiv(className) {
    const divs = document.querySelectorAll('.content-option');
    divs.forEach((div) => {
        if (div.classList.contains(className)) {
            div.classList.remove('hidden');
        }
    });
}

// Añadir eventos a los radio buttons
document.querySelectorAll('input[name="respuesta[s3_p1]"]').forEach((radio) => {
    radio.addEventListener('change', function() {
        hideAllDivs();
        // Se pasa la clase del valor del radio
        showDiv(this.value.replace(/\s+/g, '-')); // Reemplazamos los espacios por guiones en caso de que el valor tenga varios términos
    });
});

      </script>

      {{-- SCRIPT PARA OCULTAR O MOSTRAR CUANDO SE DA CLICK A LA OPCION OTRO --}}
<script>
  const optionMostrarRadio = document.getElementById('optionMostrar');// Este es el que muestra el div
    const option1Radio = document.getElementById('option1');  
    const option2Radio = document.getElementById('option2');
    const option3Radio = document.getElementById('option3');
    const option4Radio = document.getElementById('option4');

    const contentDiv = document.getElementById('contentDiv');

    // Función para mostrar u ocultar el div según la opción seleccionada
    function toggleDivVisibility() {
      if (optionMostrarRadio.checked) {
        contentDiv.classList.remove('hidden');
        contentDiv.classList.add('block');
      } else {
        contentDiv.classList.remove('block');
        contentDiv.classList.add('hidden');
      }
    }

    // Agregar eventos para las opciones
    optionMostrarRadio.addEventListener('change', toggleDivVisibility);
    option1Radio.addEventListener('change', toggleDivVisibility);
    option2Radio.addEventListener('change', toggleDivVisibility);
    option3Radio.addEventListener('change', toggleDivVisibility);
    option4Radio.addEventListener('change', toggleDivVisibility);

    // Llamar a la función al inicio para verificar si hay alguna opción seleccionada
    toggleDivVisibility(); 
</script>

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