<x-layouts.app>
    <div href="#" class=" block mx-auto my-auto w-full text-black  max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-sm  dark:bg-gray-800 ">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">EXPECTATIVAS DE DESARROLLO</h5>
        <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">Marcar los campos que correspondan a su trayectoria profesional</label>

    <form id="formulario" method="POST" action="{{ route('general.store') }}">
        @csrf
        @method('POST')
        {{-- PREGUNTA 1 --}}
        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                ¿Le gustaría tomar cursos de actualización?
            </label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s5_p1]" @if(old('s5_p1', optional($respuestas)['s5_p1']) == "Si") checked @endif value="Si" class="radio-toggle" data-target="s5_p2">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">Sí</label>
                </div>
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s5_p1]" @if(old('s5_p1', optional($respuestas)['s5_p1']) == "No") checked @endif value="No" class="radio-toggle" data-target="s5_p2">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div>
                <div class="detalle-container hidden" data-target="s5_p2">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">¿Cuáles?</label>
                    <textarea name="respuesta[s5_p2]" rows="1"
                        class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        placeholder="Ejemplo: Diplomado en educación...">{{ old('s5_p2', optional($respuestas)['s5_p2']) }}</textarea>
                </div>
            </div>
        </div>
    
        {{-- PREGUNTA 2 --}}
        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                ¿Le gustaría tomar algún posgrado?
            </label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s5_p3]" @if(old('s5_p3', optional($respuestas)['s5_p3']) == "Si") checked @endif value="Si" class="radio-toggle" data-target="s5_p4">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">Sí</label>
                </div>
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s5_p3]" @if(old('s5_p3', optional($respuestas)['s5_p3']) == "No") checked @endif value="No" class="radio-toggle" data-target="s5_p4">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div>
                <div class="detalle-container hidden" data-target="s5_p4">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">¿Cuál?</label>
                    <textarea name="respuesta[s5_p4]" rows="1"
                        class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        placeholder="Ejemplo: Maestría en educación...">{{ old('s5_p4', optional($respuestas)['s5_p4']) }}</textarea>
                </div>
            </div>
        </div>
        
        {{-- PREGUNTA 3 --}}
        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                ¿Pertenece a organizaciones sociales?
            </label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s6_p1]" @if(old('s6_p1', optional($respuestas)['s6_p1']) == "Si") checked @endif value="Si" class="radio-toggle" data-target="s6_p2">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">Sí</label>
                </div>
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s6_p1]" @if(old('s6_p1', optional($respuestas)['s6_p1']) == "No") checked @endif value="No" class="radio-toggle" data-target="s6_p2">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div>
                <div class="detalle-container hidden" data-target="s6_p2">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">¿A cuál?</label>
                    <textarea name="respuesta[s6_p2]" rows="1"
                        class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        placeholder="Ejemplo: CBTIS 110...">{{ old('s6_p2', optional($respuestas)['s6_p2']) }}</textarea>
                </div>
            </div>
        </div>
        <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</h6>

        {{-- PREGUNTA 4 --}}
        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                Pertenece a organismos de profesionistas?
            </label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s6_p3]" @if(old('s6_p3', optional($respuestas)['s6_p3']) == "Si") checked @endif value="Si" class="radio-toggle" data-target="s6_p4">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">Sí</label>
                </div>
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s6_p3]" @if(old('s6_p3', optional($respuestas)['s6_p3']) == "No") checked @endif value="No" class="radio-toggle" data-target="s6_p4">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div>
                <div class="detalle-container hidden" data-target="s6_p4">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">¿A cuál?</label>
                    <textarea name="respuesta[s6_p4]" rows="1"
                        class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        placeholder="Ejemplo: Ingeniería Industrial...">{{ old('s6_p4', optional($respuestas)['s6_p4']) }}</textarea>
                </div>
            </div>
        </div>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                ¿Pertenece a la asociación de egresados?
            </label>
            <div class="grid gap-4 md:grid-cols-1">
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s6_p5]" @if(old('s6_p5', optional($respuestas)['s6_p5']) == "Si") checked @endif value="Si" class="radio-toggle" data-target="s6_p6">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">Sí</label>
                </div>
                <div class="flex items-center">
                    <input required type="radio" name="respuesta[s6_p5]" @if(old('s6_p5', optional($respuestas)['s6_p5']) == "No") checked @endif value="No" class="radio-toggle" data-target="s6_p6">
                    <label class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div> 
                <div class="detalle-container hidden" data-target="s6_p6">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">¿A cuál?</label>
                    <textarea name="respuesta[s6_p6]" rows="1"
                        class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        placeholder="Ejemplo: Ingeniería Industrial...">{{ old('s6_p6', optional($respuestas)['s6_p6']) }}</textarea>
                </div>
            </div>
        </div>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                
            </label>
            
                <div class="detalle-container hidden" data-target="s6_p7">
                    <label class="block mb-2 text-sm text-gray-900 dark:text-white">¿A cuál?</label>
                    <textarea name="respuesta[s6_p7]" rows="1"
                        class="block p-2.5 w-70 text-sm text-gray-900 bg-gray-50 rounded-lg border 
                        border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        placeholder="Ejemplo: Ingeniería Industrial...">{{ old('s6_p7', optional($respuestas)['s6_p7']) }}</textarea>
                </div>
            </div>
            <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">PARTICIPACIÓN SOCIAL DE LOS EGRESADOS</h6>

        <div class="my-6">
            <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">COMENTARIOS Y SUGERENCIAS</label>
            <div class="grid gap-4 md:grid-cols-1">
                <div>
                    <textarea  required id="message" name="respuesta[s7_p1]" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Máx 100 palabras">{{ old('s7_p1', optional($respuestas)['s7_p1']) }}</textarea>
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


      
</div>
</div>
    
        
    </form>
    
    {{-- Script para mostrar/ocultar textarea --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('.radio-toggle');
        
            radios.forEach(radio => {
                radio.addEventListener('change', function () {
                    const target = this.dataset.target;
        
                    document.querySelectorAll(`.detalle-container[data-target="${target}"]`).forEach(div => {
                        div.classList.add('hidden');
                    });
        
                    if (this.value === 'Si') {
                        const div = document.querySelector(`.detalle-container[data-target="${target}"]`);
                        if (div) {
                            div.classList.remove('hidden');
                        }
                    }
                });
            });
        
            const form = document.getElementById('formulario');
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }
        
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
                        form.submit();
                    }
                });
            });
        });
        </script>
 
</x-layouts.app>
