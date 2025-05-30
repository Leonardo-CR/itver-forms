<x-layouts.administrarum >
    
 @push('css')
 <!-- Include stylesheet -->
 <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endpush
 <flux:breadcrumbs class="mb-4">
     <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
     <flux:breadcrumbs.item href="{{ route('admin.egresados.index') }}">Egresados</flux:breadcrumbs.item>
     <flux:breadcrumbs.item>Crear</flux:breadcrumbs.item>
 </flux:breadcrumbs>
 <form action="{{ route('admin.egresados.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('POST')
     <div class="card mt-4 space-y-4">
        <flux:input label="Número de control" name="no_control" value="{{ old('no_control') }}"             
            placeholder="Escribe el numero de control del alumno" type="text" class="mb-2"/>

        <flux:input label="Nombre" name="nombre" value="{{ old('nombre') }}"             
            placeholder="Escribe el nombre del alumno" type="text" class="mb-2"/>

        <flux:input label="Appellido Paterno" name="app" value="{{ old('app') }}"             
            placeholder="Escribe el apellido paterno del alumno" type="text" class="mb-2"/>

        <flux:input label="Appellido Materno" name="apm" value="{{ old('apm') }}"             
            placeholder="Escribe el apellido materno del alumno" type="text" class="mb-2"/>

        <flux:input label="Correo Electrónico" name="correo" value="{{ old('correo') }}"             
            placeholder="Escribe el correo electrónico del alumno" type="email" class="mb-2"/>
        
        <flux:input label="Password" name="password" value="{{ old('password') }}"             
            placeholder="Escribe la contraseña del alumno" type="password" class="mb-2"/>
 
        <flux:select label="Carrera" placeholder="Elige una carrera" name="cv_carrera">
            @foreach ($carreras as $carrera)
                <flux:select.option value="{{ $carrera->cv_carrera }}" :selected="old('cv_carrera') == $carrera->cv_carrera">{{ $carrera->nombre }}</flux:select.option>
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