<x-layouts.app>
    {{--  --}}
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Desempeño Laboral</h5>
      
    <!-- CheckButtons Preguntas-->
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> En tu desempeño laboral, ¿Cuál(es) de las siguientes herramientas utilizas?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Documentos técnicos</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="checkbox" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Planos de Ingeniería</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="checkbox" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Normas Nacionales y/o Internacionales</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Softwares</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
          </div>
          </div>
      </div>
  
      <!-- RadioButtons Preguntas -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Colaboras actualmente en proyectos de investigación y/o desarrollo?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">En caso de ser POSITIVA la respuesta anterior, especifique el tipo de investigación 
              y/o desarrollo</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicada</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Experimental</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Documental</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descriptiva</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Perteneces o participas en redes de colaboración?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuenta con alguna certificación vigente nacional y/o internacional?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <div>
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que la respuesta anterior sea POSITIVA, especifica.</label>
          <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras"></textarea>
      </div>
  
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Siguiente ➡️
        </button>
      </div>
    </form>
  </div>
    {{--  --}}
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Desempeño Laboral</h5>
      
    <!-- CheckButtons Preguntas-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Ofreces alguno de los siguientes servicios?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asesoría y/o consultoría</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="checkbox" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Peritaje</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="checkbox" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Certificación</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ninguno</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
          </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Cuál de las siguientes lenguas extranjeras utilizas en tu actividad laboral?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inglés</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="checkbox" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Francés</label>
          </div>
          <div class="flex items-center">
              <input id="radio-tiempo" type="checkbox" value="tiempo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-tiempo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aleman</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Italiano</label>
          </div>
          <div class="flex items-center">
              <input id="radio-otras" type="checkbox" value="otras" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-otras" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
          </div>
          </div>
      </div>
  
      <!-- RadioButtons Preguntas -->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Has realizado o colaborado con alguna publicación de un artículo en revista científica y/o de divulgación? </label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
          <div class="flex items-center">
              <input id="radio-apoyo" type="radio" value="apoyo" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="radio-apoyo" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
          </div>
          </div>
      </div>
  
      <!--Text area-->
  
      <div>
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que la respuesta anterior sea POSITIVA, especifica.</label>
          <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras"></textarea>
      </div>
  
      <!--Checkbuttons-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿En cuál de los siguientes documentos has participado en su elaboración?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manuales operativos</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Procedimientos</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lineamientos</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Informes técnicos</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="checkbox" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otros</label>
              </div>
          
          </div>
      </div>
  
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Siguiente ➡️
        </button>
      </div>
    </form>
  </div>
    {{--  --}}
    
<!-- Contenedor principal -->
<div class="block mx-auto my-auto w-full text-black max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800"> 
    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Desempeño Laboral</h5>
      
    <!-- RadioButtons Preguntas-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> ¿Qué sistema de gestión de calidad aplicas en tu actividad laboral?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio1" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Calidad</label>
              </div>
              <div class="flex items-center">
                  <input id="radio2" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ambiental</label>
              </div>
              <div class="flex items-center">
                  <input id="radio3" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seguridad</label>
              </div>
              <div class="flex items-center">
                  <input id="radio4" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Otras</label>
              </div>
          </div>
      </div>
  
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">¿Perteneces a alguna asociación profesional relacionada con tu carrera?</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Si</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
              </div>
          </div>
      </div>
  
      <!--Text area-->
  
      <div>
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En caso de que tu respuesta de la pregunta anterior sea POSITIVA, especifica a que 
              asociación perteneces.</label>
          <textarea id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máximo 100 palabras"></textarea>
      </div>
  
      <!--Radiobuttons 2-->
      <div class="my-6">
          <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Desde tu punto de vista, el aporte de ética en un ambiente laboral consiste en:</label>
          <div class="grid gap-4 md:grid-cols-1">
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicar las Normas básicas de una empresa</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aplicar reglas de cortesía que demuestran respeto por los demás</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asumir un comportamiento adecuado para la buena convivencia</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Establecer una serie de normas como guía de conducta</label>
              </div>
              <div class="flex items-center">
                  <input id="radio-compromiso" type="radio" value="compromiso" name="obstaculo" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="radio-compromiso" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ninguna de las anteriores</label>
              </div>
          
          </div>
      </div>
  
  
      <!-- Botón al final -->
      <div class="flex justify-end mt-8">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:px-4 sm:py-2">
          Enviar ➡️
        </button>
      </div>
    </form>
  </div>
    {{--  --}}
</x-layouts.app>