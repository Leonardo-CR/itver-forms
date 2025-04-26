<x-layouts.administrarum >
    
 @push('css')
 <!-- Include stylesheet -->
 <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endpush
 <flux:breadcrumbs class="mb-4">
     <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
     <flux:breadcrumbs.item href="{{ route('admin.encuestas.index') }}">Encuestas</flux:breadcrumbs.item>
     <flux:breadcrumbs.item>Crear</flux:breadcrumbs.item>
 </flux:breadcrumbs>
 <form action="{{ route('admin.encuestas.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('POST')
     <div class="card mt-4 space-y-4">
        <flux:input label="Clave Única de la encuesta" name="cv_encuesta" value="{{ old('cv_encuesta') }}"             
            placeholder="Escribe la clave unica de la encuesta" type="text" class="mb-2"/>

        <flux:input label="Periodo" name="periodo" value="{{ old('periodo') }}"             
            placeholder="Escribe el periodo" type="text" class="mb-2"/>

        <flux:input label="Fecha de inicio" name="fecha_inicio" value="{{ old('fecha_inicio') }}"             
            placeholder="Escribe la fecha de inicio" type="date" class="mb-2"/>

        <flux:input label="Hora de inicio" name="hora_inicio" value="{{ old('hora_inicio') }}"             
            placeholder="Hora de inicio" type="time" class="mb-2"/>

        <flux:input label="Fecha de cierre" name="fecha_cierre" value="{{ old('fecha_cierre') }}"             
            placeholder="Escribe la fecha de cierre" type="date" class="mb-2"/>

        <flux:input label="Hora de cierre" name="hora_cierre" value="{{ old('hora_cierre') }}"             
            placeholder="Hora de cierre" type="time" class="mb-2"/>

        <flux:select label="Tipo de Encuesta" placeholder="Elige un tipo de encuesta" name="cv_tipo_encuesta">
            @foreach ($tipos_encuestas as $tipo_encuesta)
                <flux:select.option value="{{ $tipo_encuesta->cv_tipo_encuesta }}" :selected="old('cv_tipo_encuesta') == $tipo_encuesta->cv_tipo_encuesta">{{ $tipo_encuesta->nombre }}</flux:select.option>
            @endforeach
        </flux:select>                        

        <div class="flex justify-end">
            <flux:button variant="primary" type="Submit">Enviar</flux:button>      
        </div>
    </div>    
 </form>
 
 @push('js')
     <!-- Include the Quill library -->
     <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

     <script>
         const quill = new Quill('#editor', {
           theme: 'snow'
         });
         quill.on('text-change',function(){
             document.querySelector('#content').value = quill.root.innerHTML;
         });
     </script>

     
 @endpush

</x-layouts.administrarum>