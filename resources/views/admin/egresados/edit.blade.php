<x-layouts.administrarum >
    @push('css')
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @endpush
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.egresados.index') }}">Egresados</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>   
    </flux:breadcrumbs>             
    <form action="{{ route('admin.egresados.update', $egresado) }}" method="POST" enctype="multipart/form-data">        
        @csrf
        @method('PUT')
        <div class="card mt-4 space-y-4">
           <flux:input label="Nombre" name="nombre" value="{{ old('nombre', $egresado->name) }}"             
               placeholder="Escribe el nombre del alumno" type="text" class="mb-2"/>
      
           <flux:input label="Correo Electrónico" name="correo" value="{{ old('correo', $egresado->email) }}"             
               placeholder="Escribe el correo electrónico del alumno" type="email" class="mb-2"/>
   
           <flux:select label="Carrera" placeholder="Elige una carrera" name="cv_carrera">
                @foreach ($carreras as $carrera)
                    <flux:select.option value="{{ $carrera->cv_carrera }}" :selected="old('cv_carrera', $egresado->carrera->cv_carrera) == $carrera->cv_carrera">{{ $carrera->nombre }}</flux:select.option>
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


   