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
                  <input required id="ans1" type="radio" value="Si" @if(old('s9_p1', optional($respuestas)['s9_p1']) == "Si") checked @endif name="respuesta[s9_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label  for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
              <div class="flex items-center">
                  <input required id="ans2" type="radio" value="No" @if(old('s9_p1', optional($respuestas)['s9_p1']) == "No") checked @endif name="respuesta[s9_p1]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
              </div>
          </div>
      
          <!-- Preguntas cuando SI trabaja -->
          <div class="my-6 trabajo-si">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál es la Antigüedad de tu Empleo Actual?</label>
              <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="1-3 Meses" @if(old('s9_p2', optional($respuestas)['s9_p2']) == "1-3 Meses") checked @endif name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1-3 Meses</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="3-12 Meses" @if(old('s9_p2', optional($respuestas)['s9_p2']) == "3-12 Meses") checked @endif name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3-12 Meses</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="1-3 Años" @if(old('s9_p2', optional($respuestas)['s9_p2']) == "1-3 Años") checked @endif name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1-3 Años</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Más de 3 Años" @if(old('s9_p2', optional($respuestas)['s9_p2']) == "Más de 3 Años") checked @endif name="respuesta[s9_p2]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de 3 Años</label>
                </div>
              </div>
          </div>
      
          <!-- Preguntas cuando NO trabaja -->
          <div class="my-6 trabajo-no">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Señale la razón por la cual no trabaja</label>
              <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="Estudio un Posgrado" @if(old('s9_p3', optional($respuestas)['s9_p3']) == "Estudio un Posgrado") checked @endif name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estudio un Posgrado</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="Por razones de salud" @if(old('s9_p3', optional($respuestas)['s9_p3']) == "Por razones de salud") checked @endif name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Por razones de salud</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="Ajustes propios de la empresa" @if(old('s9_p3', optional($respuestas)['s9_p3']) == "Ajustes propios de la empresa") checked @endif name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ajustes propios de la empresa</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="No he encontrado un trabajo relacionado a lo que estudié" @if(old('s9_p3', optional($respuestas)['s9_p3']) == "No he encontrado un trabajo relacionado a lo que estudié") checked @endif name="respuesta[s9_p3]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No he encontrado un trabajo relacionado a lo que estudié</label>
                </div>
              </div>
          </div>
      
          <!-- Preguntas generales (siempre visibles) -->
<div class="my-6 trabajo-si">
    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Después de egresar, en cuanto tiempo conseguiste trabajo relacionado con tu carrera?</label>
    <div class="grid gap-4 md:grid-cols-1">
        <div class="flex items-center">
            <input id="radio-compromis" type="radio" value="Al egresar ya contaba con un trabajo" @if(old('s9_p4', optional($respuestas)['s9_p4']) == "Al egresar ya contaba con un trabajo") checked @endif name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="radio-compromis" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Al egresar ya contaba con un trabajo</label>
        </div>
        <div class="flex items-center">
            <input id="radio-apoyo" type="radio" value="Menos de 9 meses" @if(old('s9_p4', optional($respuestas)['s9_p4']) == "Menos de 9 meses") checked @endif name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menos de 9 meses</label>
        </div>
        <div class="flex items-center">
            <input id="radio-tiempo" type="radio" value="Más de 1 año" @if(old('s9_p4', optional($respuestas)['s9_p4']) == "Más de 1 año") checked @endif name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Más de 1 año</label>
        </div>
        <div class="flex items-center">
            <input id="radio-no-consigo" type="radio" value="Aún no lo consigo" @if(old('s9_p4', optional($respuestas)['s9_p4']) == "Aún no lo consigo") checked @endif name="respuesta[s9_p4]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="radio-no-consigo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aún no lo consigo</label>
        </div>
        {{-- TextArea --}}
        <div id="razon-no-consigo-container" class="hidden">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que la pregunta anterior sea "aún no lo consigo", ¿cuál es la razón?</label>
            <textarea id="message" rows="4" name="respuesta[s9_p5]" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras">
                {{ old('s9_p5', optional($respuestas)['s9_p5']) }}
            </textarea>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtener el radio button y el contenedor del textarea
    const radioNoConsigo = document.getElementById('radio-no-consigo');
    const razonNoConsigoContainer = document.getElementById('razon-no-consigo-container');
    const allRadioOptions = document.querySelectorAll('input[name="respuesta[s9_p4]"]');
    
    // Función para manejar el cambio en la selección
    function handleRadioChange() {
        if (radioNoConsigo.checked) {
            razonNoConsigoContainer.classList.remove('hidden');
        } else {
            razonNoConsigoContainer.classList.add('hidden');
        }
    }
    
    // Añadir event listeners a todos los radio buttons
    allRadioOptions.forEach(radio => {
        radio.addEventListener('change', handleRadioChange);
    });
    
    // Ejecutar al cargar la página para establecer el estado inicial
    handleRadioChange();
});
</script>
      
          <!-- Preguntas cuando SI trabaja -->
          <div class="my-6 trabajo-si">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Cuál es el rol que desempeñas en tu trabajo actual?</label>
              <div class="grid gap-4 md:grid-cols-2">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="Dirección, gerencia" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Dirección, gerencia") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dirección, gerencia</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="Empleado" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Empleado") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Empleado</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="Jefatura" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Jefatura") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jefatura</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Dueño de empresa" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Dueño de empresa") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dueño de empresa</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="Supervisión" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Supervisión") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supervisión</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Otro" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Otro") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otro</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Coordinador" @if(old('s9_p6', optional($respuestas)['s9_p6']) == "Coordinador") checked @endif name="respuesta[s9_p6]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Coordinador</label>
                </div>
              </div>
          </div>
      
          <!-- Preguntas cuando SI trabaja -->
          <div class="my-6 trabajo-si">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Qué tipo de sector es en el que laboras?</label>
              <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="Sector privado" @if(old('s9_p7', optional($respuestas)['s9_p7']) == "Sector privado") checked @endif name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sector privado</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="Sector público" @if(old('s9_p7', optional($respuestas)['s9_p7']) == "Sector público") checked @endif name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sector público</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="En empresa propia" @if(old('s9_p7', optional($respuestas)['s9_p7']) == "En empresa propia") checked @endif name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">En empresa propia</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Otras" @if(old('s9_p7', optional($respuestas)['s9_p7']) == "Otras") checked @endif name="respuesta[s9_p7]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
                </div>
              </div>
          </div>
      
          <!-- Preguntas cuando SI trabaja -->
          <div class="my-6 trabajo-si">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Dentro de la empresa, ¿en qué area te desempeñas?</label>
              <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="Producción" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Producción") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Producción</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="Ambiental" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Ambiental") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ambiental</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="Seguridad" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Seguridad") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seguridad</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Recursos Financieros" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Recursos Financieros") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recursos Financieros</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Mantenimiento" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Mantenimiento") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mantenimiento</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Recursos Humanos" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Recursos Humanos") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recursos Humanos</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Otros" @if(old('s9_p8', optional($respuestas)['s9_p8']) == "Otros") checked @endif name="respuesta[s9_p8]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
                </div>
              </div>
          </div>
      
          <!-- Preguntas generales (siempre visibles) -->
          <div class="my-6 trabajo-si">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Medio principal para conseguir el primer trabajo después del egreso</label>
              <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="Bolsa de trabajo del Tecnm/Itver" @if(old('s9_p9', optional($respuestas)['s9_p9']) == "Bolsa de trabajo del Tecnm/Itver") checked @endif name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bolsa de trabajo del Tecnm/Itver</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="Anuncio en internet" @if(old('s9_p9', optional($respuestas)['s9_p9']) == "Anuncio en internet") checked @endif name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Anuncio en internet</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="Recomendación de colegas" @if(old('s9_p9', optional($respuestas)['s9_p9']) == "Recomendación de colegas") checked @endif name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recomendación de colegas</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Residencias Profesionales" @if(old('s9_p9', optional($respuestas)['s9_p9']) == "Residencias Profesionales") checked @endif name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Residencias Profesionales</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="otras" @if(old('s9_p9', optional($respuestas)['s9_p9']) == "otras") checked @endif name="respuesta[s9_p9]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
                </div>
              </div>
          </div>
      
          <!-- Preguntas cuando SI trabaja -->
          <div class="my-6 trabajo-si">
              <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Grado de satisfacción de tu trabajo actual</label>
              <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" value="Muy satisfecho" @if(old('s9_p10', optional($respuestas)['s9_p10']) == "Muy satisfecho") checked @endif name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Muy satisfecho</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-apoyo" type="radio" value="Satisfecho" @if(old('s9_p10', optional($respuestas)['s9_p10']) == "Satisfecho") checked @endif name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Satisfecho</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-tiempo" type="radio" value="Poco satisfecho" @if(old('s9_p10', optional($respuestas)['s9_p10']) == "Poco satisfecho") checked @endif name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Poco satisfecho</label>
                </div>
                <div class="flex items-center">
                    <input id="radio-otras" type="radio" value="Insatisfecho" @if(old('s9_p10', optional($respuestas)['s9_p10']) == "Insatisfecho") checked @endif name="respuesta[s9_p10]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener los radio buttons de la primera pregunta
            const trabajoSi = document.getElementById('ans1');
            const trabajoNo = document.getElementById('ans2');
            
            // Obtener todos los divs que deben mostrarse/ocultarse
            const divsTrabajoSi = document.querySelectorAll('.trabajo-si');
            const divsTrabajoNo = document.querySelectorAll('.trabajo-no');
            
            // Función para manejar el cambio en la selección
            function handleTrabajoChange() {
                if (trabajoSi.checked) {
                    // Mostrar divs para "Sí trabaja"
                    divsTrabajoSi.forEach(div => div.classList.remove('hidden'));
                    // Ocultar divs para "No trabaja"
                    divsTrabajoNo.forEach(div => div.classList.add('hidden'));
                } else if (trabajoNo.checked) {
                    // Mostrar divs para "No trabaja"
                    divsTrabajoNo.forEach(div => div.classList.remove('hidden'));
                    // Ocultar divs para "Sí trabaja"
                    divsTrabajoSi.forEach(div => div.classList.add('hidden'));
                }
            }
            
            // Añadir event listeners a los radio buttons
            trabajoSi.addEventListener('change', handleTrabajoChange);
            trabajoNo.addEventListener('change', handleTrabajoChange);
            
            // Ejecutar al cargar la página para establecer el estado inicial
            handleTrabajoChange();
        });
    </script>
    </x-layouts.app>