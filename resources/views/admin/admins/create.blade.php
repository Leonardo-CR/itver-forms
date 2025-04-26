<x-layouts.administrarum >
    
 @push('css')
 <!-- Include stylesheet -->
 <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endpush
 <flux:breadcrumbs class="mb-4">
     <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
     <flux:breadcrumbs.item href="{{ route('admin.admins.index') }}">Administradores</flux:breadcrumbs.item>
     <flux:breadcrumbs.item>Crear</flux:breadcrumbs.item>
 </flux:breadcrumbs>
 <form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('POST')
     <div class="card mt-4 space-y-4">
        <flux:input label="Clave Única" name="cv_administrador" value="{{ old('cv_administrador') }}"             
            placeholder="Clave unica del administrador" type="text" class="mb-2"/>
                       
        <flux:input label="Nombre" name="nombre" value="{{ old('nombre') }}"             
            placeholder="Nombre del usuario administrador" type="text" class="mb-2"/>
        
        <flux:input label="Correo Electrónico" name="correo" value="{{ old('correo') }}"             
            placeholder="Correo del administrador" type="email" class="mb-2"/>

        <flux:input label="Password" name="password" value="{{ old('password') }}"             
            placeholder="Escribe la contraseña del administrador" type="password" class="mb-2"/>

        <flux:select label="Tipo" placeholder="Elige un tipo" name="tipo">
            <flux:select.option value="DBA" :selected="old('tipo') == 'DBA'">DBA</flux:select.option>
            <flux:select.option value="Jefe de Departamento" :selected="old('tipo') == 'Jefe de Departamento'">Jefe de Departamento</flux:select.option>
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