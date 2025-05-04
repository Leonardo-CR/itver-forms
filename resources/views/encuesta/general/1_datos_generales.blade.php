<x-layouts.app>
    <div href="#" class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
        <h5 class="mb-2 text-2xl uppercase font-bold tracking-tight text-gray-900 dark:text-white">Perfil del egresado</h5>   
        <form id="formulario" action="{{ route('general.datos_personales.guardarDatosGenerales') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <!-- FILA 1-->
          <div class="mb-6">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre:</label>
            <input required type="text" id="nombre" name="nombre" value="{{ old('nombre', optional($datos)->nombre) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Felipe" required />
          </div>
           <!-- FILA 2-->
          <div class="grid gap-6 mb-6 md:grid-cols-2">
              <div>
                  <label for="ap_paterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno:</label>
                  <input required type="text" id="ap_paterno" name="ap_paterno" value="{{ old('ap_paterno', optional($datos)->ap_paterno) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ferra" required />
              </div>  
              <div>
                  <label for="ap_materno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno:</label>
                  <input required type="text" id="ap_materno" name="ap_materno" value="{{ old('ap_materno', optional($datos)->ap_materno) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Gomez" required />
              </div>  
          </div>
          <!-- FILA 3-->
          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
              <label for="fecha_nac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de nacimiento:</label>
              <!-- DATE PICKER -->
              <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                  {{-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"> --}}
                    {{-- <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/> --}}
                  </svg>
                </div>
                <input required datepicker id="fecha_nac" type="date" name="fecha_nac" value="{{ old('fecha_nac', optional($datos)->fecha_nac) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona una fecha">
              </div>
            </div>
            <div> 
              <label for="masculino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo:</label>
              <!-- SEXO RADIO BUTTONS -->
              <div class="flex items-center mb-4">
                <input required id="masculino" type="radio" value="Masculino" name="sexo" @if(old('sexo', optional($datos)->sexo) == 'Masculino') checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="masculino" class="ms-2 mr-5 text-sm font-medium text-gray-900 dark:text-gray-300">Masculino</label>
                <input required id="femenino" type="radio" value="Femenino" name="sexo" @if(old('sexo', optional($datos)->sexo) == 'Femenino') checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="femenino" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Femenino</label>
              </div>
            </div>    
          </div>
          <!-- FILA 4-->
          <div class="mb-6">
            <label for="curp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CURP:</label>
            <input required type="text" id="curp" name="curp" value="{{ old('curp', optional($datos)->curp) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="FAGF900101HDFRRL09" required />
          </div>
          <!-- FILA 5-->
          <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div>
              <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado:</label>
              <input required type="text" id="estado" name="estado" value="{{ old('estado', optional($datos)->estado) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz" required />
            </div>
            <div>
              <label for="municipio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipio:</label>
              <input required type="text" id="municipio" name="municipio" value="{{ old('municipio', optional($datos)->municipio) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz" required />
            </div>
            <div>
              <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad:</label>
              <input required type="text" id="ciudad" name="ciudad" value="{{ old('ciudad', optional($datos)->ciudad) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Veracruz" required />
            </div>
          </div>
          <!-- FILA 6-->
          <div class="grid gap-6 mb-6 md:grid-cols-4">
            <div>
              <label for="colonia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colonia:</label>
              <input required type="text" id="colonia" name="colonia" value="{{ old('colonia', optional($datos)->colonia) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Infonavit Buenavista" required />
            </div>
            <div>
              <label for="cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C.P.:</label>
              <input required type="text" id="cp" name="cp" value="{{ old('cp', optional($datos)->cp) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="91850" required />
            </div>
            <div>
              <label for="calle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calle:</label>
              <input required type="text" id="calle" name="calle" value="{{ old('calle', optional($datos)->calle) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ahuehuete" required />
            </div>
            <div>
              <label for="no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.:</label>
              <input required type="text" id="no" name="no" value="{{ old('no', optional($datos)->no) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="44" required />
            </div>
          </div>
          <!-- FILA 7-->
          <div class="grid gap-6 mb-6 md:grid-cols-2">
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
              <label for="especialidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingrese su Especialidad:</label>
              <input type="text" id="especialidad" name="especialidad" value="{{ old('especialidad', optional($datos)->especialidad) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Redes y telecomunicaciones" required />
            </div>
          </div>
          <!-- FILA 7-->
          <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div>
              <label for="mes_egreso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mes de egreso:</label>
              <select required id="mes_egreso" name="mes_egreso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Seleccione un mes</option>
                <option value="Enero" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Enero")>Enero</option>
                <option value="Febrero" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Febrero")>Febrero</option>
                <option value="Marzo" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Marzo")>Marzo</option>
                <option value="Abril" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Abril")>Abril</option>
                <option value="Mayo" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Mayo")>Mayo</option>
                <option value="Junio" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Junio")>Junio</option>
                <option value="Julio" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Julio")>Julio</option>
                <option value="Agosto" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Agosto")>Agosto</option>
                <option value="Septiembre" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Septiembre")>Septiembre</option>
                <option value="Octubre" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Octubre")>Octubre</option>
                <option value="Noviembre" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Noviembre")>Noviembre</option>
                <option value="Diciembre" @selected(old('mes_egreso', optional($datos)->mes_egreso) == "Diciembre")>Diciembre</option>
            </select>
            
            </div>
            <div>
              <label for="anio_egreso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Año de egreso:</label>
              <input required type="number" id="anio_egreso" name="anio_egreso" value="{{ old('anio_egreso', optional($datos)->anio_egreso) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ejemplo:2025" required />
            
            </div>
            <!-- TELEFONO CELULAR -->
            <div>
              <label for="tel_celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono celular:</label>
              <div class="flex w-full gap-4">
                <input  required type="text" id="lada" name="lada_celular" value="{{ old('lada_celular', optional($datos)->lada_celular) }}" class="basis-[30%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+52" required />
                <input  required type="text" id="tel_celular" name="tel_celular" value="{{ old('tel_celular', optional($datos)->tel_celular) }}" class="basis-[70%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2291411203" required />
              </div>
            </div>
          </div>
          <!-- FILA 7-->
          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
              <label for="soltero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado civil:</label>
              <!-- ESTADO CIVIL RADIO BUTTONS -->
              <div class="flex items-center mb-4 sexo">
                <input  required id="soltero" type="radio" value="Soltero(a)" name="estado_civil" @if(old('estado_civil', optional($datos)->estado_civil) == 'Soltero(a)') checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="soltero" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Soltero(a)</label>
                <input required id="casado" type="radio" value="Casado(a)" name="estado_civil" @if(old('estado_civil', optional($datos)->estado_civil) == 'Casado(a)') checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="casado" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Casado(a)</label>
                <input required id="otro" type="radio" value="Otro" name="estado_civil" @if(old('estado_civil', optional($datos)->estado_civil) == 'Otro') checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="otro" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otro</label>
              </div>
            </div>
            <!-- TELEFONO CELULAR -->
            <div>
              <label for="tel_celular2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono Casa paterna:</label>
              <div class="flex w-full gap-4">
                <input required type="text" id="lada2" name="lada_casa_paterna" value="{{ old('lada_casa_paterna', optional($datos)->lada_casa_paterna) }}" class="basis-[20%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+52" required />
                <input required type="text" id="tel_celular2" name="tel_casa_paterna" value="{{ old('tel_casa_paterna', optional($datos)->tel_casa_paterna) }}" class="basis-[80%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2291832312" required />
              </div>
            </div>
          </div>
        
          <!-- FILA 1-->
    <div class="mb-6">
      <label for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electrónico:</label>
      <input required type="text" id="correo" name="correo" value="{{ old('correo', optional($datos)->correo) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="aaronsalasn@gmail.com" required />
    </div>
    <!-- FILA 2-->
    <div class="mb-6">
      <label for="no_control" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de control:</label>
      <input required type="text" id="no_control" name="no_control" value="{{ old('no_control', optional($datos)->no_control) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="22020795" required />
    </div>
    <!-- FILA 3-->
    <div class="grid gap-6 mb-6 md:grid-cols-2">
      <div>
        <label for="titulado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">¿Estás titulado?:</label>
        <!-- ESTADO CIVIL RADIO BUTTONS -->
        <div class="mb-4 sexo">
          <input required id="titulado" type="radio" value="1" name="titulado" @if(old('titulado', optional($datos)->titulado) == 1) checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="titulado" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
          <input required id="no_titulado" type="radio" value="0" name="titulado" @if(old('titulado', optional($datos)->titulado) == 0) checked @endif class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="no_titulado" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
        </div>
      </div>
      <!-- DOMINIO IDIOMAS -->
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dominio del idioma extranjero:</label>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="ingles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inglés:</label>
            <div class="flex w-full gap-4">
              <input required type="text" id="ingles" name="dominio_ingles" value="{{ old('dominio_ingles', optional($datos)->dominio_ingles) }}" class="basis-[90%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="50" required />
              <span class="basis-[10%] mb-2 text-sm font-medium text-gray-900 dark:text-white">%</span>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- FILA 4-->
    <div class="mb-6">
      <label for="paquetes_comp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Manejo de paquetes computacionales (especificar):</label>
      <input required type="text" id="paquetes_comp" name="manejo_paquetes" value="{{ old('manejo_paquetes', optional($datos)->manejo_paquetes) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Excel, Word, ..." required />
    </div>
    <!-- FILA 5 -->
    <div class="flex">
      <button type="submit" class="ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Terminar Sección</button>
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