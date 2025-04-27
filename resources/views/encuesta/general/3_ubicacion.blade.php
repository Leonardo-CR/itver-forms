<x-layouts.app>
    
  <div href="#" class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
      <h5 class="mb-2 text-2xl uppercase font-bold tracking-tight text-gray-900 dark:text-white">ubicación laboral de los egresados</h5>   
      <form action="{{ route('quibio.store') }}" method="POST">
        @csrf
        @method('POST')
        <!-- FILA 1-->
        <div class="mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Actividad a la que se dedica actualmente:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value="Trabaja" name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Trabaja</label>
            </div>
            <div>
              <input id="ans2" type="radio" value="Estudia" name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estudia</label>
            </div>
            <div>
              <input id="ans3" type="radio" value="Estudia y trabaja" name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estudia y trabaja</label>
            </div>
            <div>
              <input id="ans4" type="radio" value="No estudia ni trabaja" name="respuesta[s3_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No estudia ni trabaja</label>
            </div>
          </div>
        </div>
        <!-- FILA 2-->
        <div class="mb-6">
          <label for="ans5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Si estudia, indicar si es:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans5" type="radio" value="Especialidad" name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Especialidad</label>
            </div>
            <div>
              <input id="ans6" type="radio" value="Maestria" name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maestria</label>
            </div>
            <div>
              <input id="ans7" type="radio" value="Doctorado" name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Doctorado</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Idiomas" name="respuesta[s3_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Idiomas</label>
            </div>
          </div>
          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="otro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
                <input type="text" name="respuesta[s3_p3]" id="otro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Matricula" required />
            </div>  
            <div>
                <label for="esp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad e Institución:</label>
                <input type="text" name="respuesta[s3_p4]" id="esp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Unitec" required />
            </div>  
          </div>
        </div>
        <!-- FILA 3-->
        <div class="mb-6">
          <label for="ans9" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de trabajar. Tiempo Transcurrido para obtener el primer empleo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans9" type="radio" value="Antes de Egresar" name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Antes de Egresar</label>
            </div>
            <div>
              <input id="ans10" type="radio" value="Menos de seis meses" name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de seis meses</label>
            </div>
            <div>
              <input id="ans11" type="radio" value="Entre seis meses y un año" name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans11" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entre seis meses y un año</label>
            </div>
            <div>
              <input id="ans12" type="radio" value="Más de un año" name="respuesta[s3_p5]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans12" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de un año</label>
            </div>
          </div>
        </div>
        <!-- FILA 4-->
        <div class="mb-6">
          <label for="ans13" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medio para Obtener el Empleo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans13" type="radio" value="Bolsa de trabajo del plantel" name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans13" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bolsa de trabajo del plantel</label>
            </div>
            <div>
              <input id="ans14" type="radio" value="Contactos personales" name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans14" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contactos personales</label>
            </div>
            <div>
              <input id="ans15" type="radio" value="Residencia Profesional" name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans15" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Residencia Profesional</label>
            </div>
            <div>
              <input id="ans16" type="radio" value="Medios masivos de comunicación" name="respuesta[s3_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medios masivos de comunicación</label>
            </div>
          </div>
        </div>
        <!-- FILA 5-->
        <div class="mb-6">
            <label for="otro2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otros:</label>
            <input type="text" name="respuesta[s3_p7]" id="otro2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Recomendación profesional" required />
        </div>  
        <!-- FILA 6-->
       
         <!-- FILA 1-->
      <div class="mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Requisitos de contratación:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value="Competencias laborales" name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Competencias laborales</label>
            </div>
            <div>
              <input id="ans2" type="radio" value="Título Profesional" name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título Profesional</label>
            </div>
            <div>
              <input id="ans3" type="radio" value="Examen de selección" name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Examen de selección</label>
            </div>
            <div>
              <input id="ans4" type="radio" value="Idioma Extranjero" name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Idioma Extranjero</label>
            </div>
            <div>
              <input id="ans5" type="radio" value="Actitudes y habilidades socio-comunicativas  (principios y valores)" name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Actitudes y habilidades socio-comunicativas  (principios y valores)</label>
            </div>
            <div>
              <input id="ans6" type="radio" value="Ninguno" name="respuesta[s3_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ninguno</label>
            </div>
          </div>
          <div>
            <label for="otro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
            <input type="text" name="respuesta[s3_p9]" id="otro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Conocimientos técnicos especificos tales como ..." required />
          </div>
        </div>
        <!-- FILA 2-->
        <div class="mb-6">
          <label for="ans7" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Idioma que utiliza en su trabajo</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans7" type="radio" value="Inglés" name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inglés</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Francés" name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Francés</label>
            </div>
            <div>
              <input id="ans9" type="radio" value="Alemán" name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alemán</label>
            </div>
            <div>
              <input id="ans10" type="radio" value="Japonés" name="respuesta[s3_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Japonés</label>
            </div>   
          </div>
          <div>
              <label for="otro2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
              <input type="text" name="respuesta[s3_p11]" id="otro2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Turco" required />
          </div>
        </div>
        <!-- FILA 3-->
        <div class="mb-6">
          <label for="hablar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del  idioma extranjero</label>
          <div class="grid gap-6 mb-6 md:grid-cols-4">
            <div>
              <label for="hablar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hablar:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="hablar" name="respuesta[s3_p12]" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="50" required />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>
            </div>
            <div>
              <label for="escribir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escribir:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="escribir" name="respuesta[s3_p13]" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10" required />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>          
            </div>
            <div>
              <label for="leer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Leer:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="leer" name="respuesta[s3_p14]" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="20" required />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>
            </div>
            <div>
              <label for="escuchar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escuchar:</label>
              <div class="flex w-full gap-4">
                <input type="number" id="escuchar" name="respuesta[s3_p15]" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="20" required />
                <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
              </div>          
            </div>
          </div>
        </div>    
        <!-- FILA 6-->
      
         <!-- FILA 1-->
      <div class="mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Antigüedad en el empleo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value="Menos de un año" name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de un año</label>
            </div>
            <div>
              <input id="ans2" type="radio" value="Un año" name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Un año</label>
            </div>
            <div>
              <input id="ans3" type="radio" value="Dos años" name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dos años</label>
            </div>
            <div>
              <input id="ans4" type="radio" value="Tres Años" name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tres Años</label>
            </div>
            <div>
              <input id="ans5" type="radio" value="Más de tres años" name="respuesta[s3_p16]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de tres años</label>
            </div>
          </div>
          <div>
            <label for="otro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de ingreso:</label>
            <input type="text" id="otro" name="respuesta[s3_p17]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2016" required />
          </div>
        </div>
        <!-- FILA 2-->
        <div class="mb-4">
          <label for="ans6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingreso (salario mínimo diario):</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans6" type="radio" value="Menos de cinco" name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de cinco</label>
            </div>
            <div>
              <input id="ans7" type="radio" value="Entre cinco y siete" name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entre cinco y siete</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Entre 8 y 10" name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Entre 8 y 10</label>
            </div>
            <div>
              <input id="ans9" type="radio" value="Más de 10" name="respuesta[s3_p18]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de 10</label>
            </div>   
          </div>
        </div>
        <!-- FILA 3-->
        <div class="mb-4">
          <label for="ans10" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel jerárquico en el trabajo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans10" type="radio" value="Técnico" name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Técnico</label>
            </div>
            <div>
              <input id="ans11" type="radio" value="Supervisor" name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans11" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supervisor</label>
            </div>
            <div>
              <input id="ans12" type="radio" value="Jefe de área" name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans12" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jefe de área</label>
            </div>
            <div>
              <input id="ans13" type="radio" value="Funcionario" name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans13" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Funcionario</label>
            </div>
            <div>
              <input id="ans14" type="radio" value="Directivo" name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans14" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Directivo</label>
            </div>
            <div>
              <input id="ans15" type="radio" value="Empresario" name="respuesta[s3_p19]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans15" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Empresario</label>
            </div>
          </div>
        </div>
        <!-- FILA 4-->
        <div class="mb-4">
          <label for="ans16" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condición de Trabajo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans16" type="radio" value="Base" name="respuesta[s3_p20]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Base</label>
            </div>
            <div>
              <input id="ans17" type="radio" value="Eventual" name="respuesta[s3_p20]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans17" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eventual</label>
            </div>
            <div>
              <input id="ans18" type="radio" value="Contrato" name="respuesta[s3_p20]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans18" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contrato</label>
            </div>
          </div>
          <div>
            <label for="otro2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Otro:</label>
            <input type="text" id="otro2" name="respuesta[s3_p21]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Auxiliar" required />
          </div>
        </div>
        <!-- FILA 5-->
        <div class="flex">
        </div>
        <!-- FILA 1-->
      <div class="mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relación del trabajo con su área de formación:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value=0 name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">0%</label>
            </div>
            <div>
              <input id="ans2" type="radio" value=20 name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">20%</label>
            </div>
            <div>
              <input id="ans3" type="radio" value=40 name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">40%</label>
            </div>
            <div>
              <input id="ans4" type="radio" value=60 name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">60%</label>
            </div>
            <div>
              <input id="ans5" type="radio" value=80 name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">80%</label>
            </div>
            <div>
              <input id="ans6" type="radio" value=100 name="respuesta[s3_p22]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">100%</label>
            </div>
          </div>
        </div>
        <!-- FILA 1-->
        <div class="mb-6">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Datos de la empresa u organismo:</label>
          <label for="ans7" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organismo:</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans7" type="radio" value="Publico" name="respuesta[s3_p23]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Publico</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Privado" name="respuesta[s3_p23]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Privado</label>
            </div>
            <div>
              <input id="ans9" type="radio" value="Social" name="respuesta[s3_p23]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Social</label>
            </div>
          </div>
        </div>
        <!-- FILA 5-->
        <div class="mb-6">
          <label for="giro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giro o actividad principal de la empresa u organismo:</label>
          <input type="text" id="giro" name="respuesta[s3_p24]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Imprenta" required />
        </div>
        <!-- FILA 5-->
        <div class="mb-6">
          <label for="razon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Razón  Social:</label>
          <input type="text" id="razon" name="respuesta[s3_p25]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Impresos Creativos del Golfo, S.A. de C.V." required />
        </div>
        <!-- FILA 5-->
        <div class="grid gap-6 mb-6 md:grid-cols-3">
          <div>
            <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado:</label>
            <input type="text" id="estado" name="respuesta[s3_p26]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz" required />
          </div>
          <div>
            <label for="municipio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipio:</label>
            <input type="text" id="municipio" name="respuesta[s3_p27]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz" required />
          </div>
          <div>
            <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad:</label>
            <input type="text" id="ciudad" name="respuesta[s3_p28]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz" required />
          </div>
        </div>
        <!-- FILA 6-->
        <div class="grid gap-6 mb-6 md:grid-cols-4">
          <div>
            <label for="colonia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colonia:</label>
            <input type="text" id="colonia" name="respuesta[s3_p29]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Infonavit Buenavista" required />
          </div>
          <div>
            <label for="cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C.P.:</label>
            <input type="text" id="cp" name="respuesta[s3_p30]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="91850" required />
          </div>
          <div>
            <label for="calle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calle:</label>
            <input type="text" id="calle" name="respuesta[s3_p31]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ahuehuete" required />
          </div>
          <div>
            <label for="no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.:</label>
            <input type="text" id="no" name="respuesta[s3_p32]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="44" required />
          </div>
        </div>
        <!-- FILA 7-->
        <div class="mb-6">
          <div class="flex w-full gap-4">
            <div class="basis-[30%]">
              <label for="lada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lada:</label>
              <input type="text" id="lada" name="respuesta[s3_p33]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+52" required />
            </div>
            <div class="basis-[50%]">
              <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono:</label>
              <input type="text" id="tel" name="respuesta[s3_p34]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2291411203" required />
            </div>
            <div class="basis-[20%]">
              <label for="ext" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ext.:</label>
              <input type="text" id="ext" name="respuesta[s3_p35]" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="800" required />
            </div>
          </div>  
        </div>
        <!-- FILA 7-->
        <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electronico:</label>
            <input type="text" id="correo" name="respuesta[s3_p36]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="aaronsalasn@gmail.com" required />
          </div>
          <div>
            <label for="web" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Página Web:</label>
            <input type="text" id="web" name="respuesta[s3_p37]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://creativosgolfo.com/" required />
          </div>
        </div>
        <div class="mb-6">
          <div>
            <label for="jefe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre y Puesto del  Jefe Inmediato:</label>
            <input type="text" id="jefe" name="respuesta[s3_p38]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bruno Diaz, CEO" required />
          </div>
        </div>
        <!-- FILA 5-->
        
         <!-- FILA 1-->
      <div class="mb-6">
          <label for="ans1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sector Económico de la Empresa u Organización</label>
          <p class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">sector primario:</p>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans1" type="radio" value="Agroindustria" name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agroindustria</label>
            </div>
            <div>
              <input id="ans2" type="radio" value="Pesquero" name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pesquero</label>
            </div>
            <div>
              <input id="ans3" type="radio" value="Minero" name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Minero</label>
            </div>
            <div>
              <input id="ans4" type="radio" value="Otros" name="respuesta[s3_p39]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
            </div>        
          </div>    
        </div>
        <!-- FILA 2-->
        <div class="mb-6">
          <p class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">sector secundario:</p>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans5" type="radio" value="Industrial" name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Industrial</label>
            </div>
            <div>
              <input id="ans6" type="radio" value="Construcción" name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Construcción</label>
            </div>
            <div>
              <input id="ans7" type="radio" value="Petrolero" name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Petrolero</label>
            </div>
            <div>
              <input id="ans8" type="radio" value="Otros" name="respuesta[s3_p40]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
            </div>        
          </div>
        </div>
        <!-- FILA 2-->
        <div class="mb-6">
          <p class="block mb-2 text-sm uppercase font-medium text-gray-900 dark:text-white">sector terciario:</p>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans9" type="radio" value="Educativo" name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Educativo</label>
            </div>
            <div>
              <input id="ans10" type="radio" value="Turismo" name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans10" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Turismo</label>
            </div>
            <div>
              <input id="ans11" type="radio" value="Comercio" name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans11" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comercio</label>
            </div>
            <div>
              <input id="ans12" type="radio" value="Servicios Financieros" name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans12" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Servicios Financieros</label>
            </div>
            <div>
              <input id="ans13" type="radio" value="Otros" name="respuesta[s3_p41]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans13" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
            </div>
          </div>
        </div>
        <!-- FILA 2-->
        <div class="mb-6">
          <label for="ans14" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tamaño de la empresa u organización</label>
          <div class="flex flex-col mb-4 sexo">
            <div>
              <input id="ans14" type="radio" value="Microempresa (1-30)" name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans14" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Microempresa (1-30)</label>
            </div>
            <div>
              <input id="ans15" type="radio" value="Pequeña (31-100)" name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans15" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pequeña (31-100)</label>
            </div>
            <div>
              <input id="ans16" type="radio" value="Mediana (101-500)" name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="ans16" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mediana (101-500)</label>
            </div>
            <div>
              <input id="ans17" type="radio" value="Grande (más de 500)" name="respuesta[s3_p42]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
  </x-layouts.app>