<x-layouts.app>
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Situación Laboral</h5>
<form action="{{ route('quibio.store') }}" method="POST"  id="formulario">
        @csrf
        @method('POST')

    <!-- Radiobutton Preguntas-->
      <div class="grid gap-0.5 my-0.5 md:grid-cols-1">
          <div>
              <label for="titulado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Trabajas actualmente?:</label>
          </div>
          <div class="flex items-center mb-4">
              <input id="default-radio-1" type="radio" value="Si" name="respuesta[s9_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
          </div>
          <div class="flex items-center">
              <input checked id="default-radio-2" type="radio" value="No" name="respuesta[s9_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál es la Antigüedad de tu Empleo Actual?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="1-3 Meses" name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1-3 Meses</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="3-12 Meses" name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3-12 Meses</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="1-3 Años" name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1-3 Años</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Más de 3 Años" name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de 3 Años</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Señale la razón por la cual no trabaja</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="Estudio un Posgrado" name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estudio un Posgrado</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Por razones de salud" name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Por razones de salud</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Ajustes propios de la empresa" name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ajustes propios de la empresa</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="No he encontrado un trabajo relacionado a lo que estudié" name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No he encontrado un trabajo relacionado a lo que estudié</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Después de egresar, en cuanto tiempo conseguiste trabajo relacionado con tu carrera?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromis" type="radio" value="Al egresar ya contaba con un trabajo" name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromis" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Al egresar ya contaba con un trabajo</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Menos de 9 meses" name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de 9 meses</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Más de 1 año" name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de 1 año</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Aún no lo consigo" name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aún no lo consigo</label>
          </div>
          {{-- TextArea --}}
          <div>
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que la pregunta anterior sea "aún no lo consigo", ¿cuál es la razón?</label>
              <textarea id="message" rows="4"  name="respuesta[s9_p5]"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras"></textarea>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Cuál es el rol que desempeñas en tu trabajo actual?</label>
          <div class="grid gap-4 md:grid-cols-2">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="Dirección, gerencia" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dirección, gerencia</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Empleado" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Empleado</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Jefatura" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jefatura</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Dueño de empresa" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dueño de empresa</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Supervisión" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supervisión</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Otro" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otro</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Coordinador" name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Coordinador</label>
          </div>
          </div>
      </div>
  
     
      
<!-- Contenedor principal -->
   
    <!-- Radiobutton Preguntas-->
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Qué tipo de sector es en el que laboras?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="Sector privado" name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sector privado</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Sector público" name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sector público</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="En empresa propia" name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">En empresa propia</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Otras" name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Dentro de la empresa, ¿en qué area te desempeñas?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="Producción" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Producción</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Ambiental" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ambiental</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Seguridad" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seguridad</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Recursos Financieros" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recursos Financieros</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Mantenimiento" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mantenimiento</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Recursos Humanos" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recursos Humanos</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Otros" name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Medio principal para conseguir el primer trabajo después del egreso</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="Bolsa de trabajo del Tecnm/Itver" name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bolsa de trabajo del Tecnm/Itver</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Anuncio en internet" name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Anuncio en internet</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Recomendación de colegas" name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recomendación de colegas</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Residencias Profesionales" name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Residencias Profesionales</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="otras" name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Grado de satisfacción de tu trabajo actual</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="Muy satisfecho" name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy satisfecho</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="Satisfecho" name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Satisfecho</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="radio" value="Poco satisfecho" name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco satisfecho</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="radio" value="Insatisfecho" name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Insatisfecho</label>
          </div>
          </div>
      </div>
  
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Terminar Sección
        </button>
      </div>
    
    </div>
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