<x-layouts.app>
  <!-- Contenedor principal -->
  <div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 from-[#f9f9f9] to-[#bcbcbc] bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Datos personales</h5>
      
      <!-- Formulario -->
      <form id="formulario" action="{{ route('quibio.datos_personales.guardarDatosGenerales') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <!-- Campo: Nombres -->
        <div>
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombres:</label>
          <input type="text" id="first_name" name="nombre" value="{{ old('nombre', optional($datos)->nombre) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu(s) nombre(s)" required />
          @error('nombre') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
        <!-- Grid 2 columnas -->
        <div class="grid gap-6 my-6 md:grid-cols-2">
          <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno:</label>
            <input type="text" id="last_name" name="ap_paterno" value="{{ old('ap_paterno', optional($datos)->ap_paterno) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." required />
            @error('ap_paterno') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
          </div>
          <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno:</label>
            <input type="text" id="company" name="ap_materno" value="{{ old('ap_materno', optional($datos)->ap_materno) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." required />
            @error('ap_materno') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
          </div>  
          <div>
            <label for="carrera" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carrera:</label>
            <select required id="carrera" name="cv_carrera" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Seleccione una carrera</option>
              @foreach ($carreras as $carrera)
                <option value="{{ $carrera->cv_carrera }}" @selected(old('cv_carrera', optional($datos)->cv_carrera) == $carrera->cv_carrera)>{{ $carrera->nombre }}</option>                          
              @endforeach
            </select>
          </div>
          <div>
            <label for="especialidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" value="{{ old('especialidad', optional($datos)->especialidad) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Biocombustibles" required />
            @error('especialidad') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
          </div>  
        </div>  
        <!-- Grid 3 columnas -->
        <div class="grid gap-6 my-6 md:grid-cols-3">
          <div>
            <label for="ingreso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de Ingreso:</label>
            <input type="text" id="ingreso" name="anio_ingreso" value="{{ old('anio_ingreso', optional($datos)->anio_ingreso) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: 2025" required />
            @error('anio_ingreso') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
          </div>
          <div>
            <label for="egreso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de Egreso:</label>
            <input type="text" id="egreso" name="anio_egreso" value="{{ old('anio_egreso', optional($datos)->anio_egreso) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo: 2025" required />
            @error('anio_egreso') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
          </div>
          <div>
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de Teléfono:</label>
            <input type="text" id="text" name="tel_celular" value="{{ old('tel_celular', optional($datos)->tel_celular) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-456-7890" required />
            @error('tel_celular') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
          </div>
        </div>
    
        <!-- Campo: Correo Electrónico -->
         <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico:</label>
            <input type="text" id="email" name="correo" value="{{ old('correo', optional($datos)->correo) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ejemplo@veracruz.tecnm.mx" required />
            @error('correo') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
         </div>
    
        <!-- 2 columnas (Numero control y Red Social) -->
        <div class="grid gap-6 my-6 md:grid-cols-2">
            <div>
              <label for="no_control" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de Control:</label>
              <input type="text" id="last_name" name="no_control" value="{{ old('no_control', optional($datos)->no_control) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2202...." required />
              @error('no_control') <span class="text-sm text-red-500">{{ $message }}</span> @enderror              
            </div>
            <div>
              <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Red social (Facebook, Instagram, X):</label>
              <input type="text" id="company" name="red_social" value="{{ old('red_social', optional($datos)->red_social) }}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="@usuario" required />
              @error('red_social') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>  
        </div>
    
        <!-- Radiobutton Preguntas-->
        <div>
          <label for="titulado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Estás titulado?:</label>
          <!-- ESTADO CIVIL RADIO BUTTONS -->
          <div class="mb-4 sexo">
            <input required id="titulado" type="radio" value="1" name="titulado" @if(old('titulado', optional($datos)->titulado) == 1) checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="titulado" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
            <input required id="no_titulado" type="radio" value="0" name="titulado" @if(old('titulado', optional($datos)->titulado) == 0) checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="no_titulado" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          @error('titulado') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
    
        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál considera que fue el principal obstáculo?</label>
            <div class="grid gap-4 md:grid-cols-2">
                <div class="flex items-center">
                    <input id="radio-compromiso" type="radio" name="obstaculo" @if(old('obstaculo', optional($datos)->obstaculo) == "compromiso") checked @endif value="compromiso" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Compromiso Laboral</label>
                </div>
              <div class="flex items-center">
                  <input id="radio-apoyo" type="radio" name="obstaculo" @if(old('obstaculo', optional($datos)->obstaculo) == "apoyo") checked @endif value="apoyo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Falta de Apoyo Institucional</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-tiempo" type="radio" name="obstaculo" @if(old('obstaculo', optional($datos)->obstaculo) == "tiempo") checked @endif value="tiempo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Falta de Tiempo</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-otras" type="radio" name="obstaculo" @if(old('obstaculo', optional($datos)->obstaculo) == "otras") checked @endif value="otras" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
            </div>
            @error('obstaculo') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
    
        <!-- Input-->
        <div class="grid gap-0.5 my-5 md:grid-cols-1">
            <div>
                <label for="explicate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Explicate:</label>
                <textarea id="message" rows="4" name="explicate" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu explicación">{{ old('explicate', optional($datos)->explicate) }}</textarea>
                @error('explicate') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>                 
        </div>
    
        <!-- Segundo radiobuttons -->
        <div class="grid gap-0.5 my-0.5 md:grid-cols-1">
            <div>
                <label for="relacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> ¿Tu trabajo actual tiene relación con la carrera qué estudiaste?:</label>
            </div>
            <div class="flex items-center mb-4">
                <input id="si_relacion" type="radio" value="1" name="relacion" @if(old('relacion', optional($datos)->relacion) == 1) checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="si_relacion" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
            </div>
            <div class="flex items-center">
                <input id="no_relacion" type="radio" value="0" name="relacion" @if(old('relacion', optional($datos)->relacion) == 0) checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="no_relacion" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
            </div>
            @error('relacion') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>
  <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Terminar Sección</button>
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