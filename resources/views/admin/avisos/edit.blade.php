<x-layouts.administrarum >
    
    @push('css')
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
   @endpush
   
   
    
    <flux:breadcrumbs class="mb-4">
   
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.avisos.index') }}">Avisos</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>
   
    </flux:breadcrumbs>
   
   
   
    
    <form action="{{ route('admin.avisos.update', $aviso) }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
        <div class="card mt-4 space-y-4">
           <flux:input label="Titulo del Aviso" name="titulo" value="{{ old('titulo', $aviso->titulo) }}" 
               
               placeholder="Escribe el titulo del Aviso" type="text" class="mb-2"/>
         
           <div>
               <p class="font-medium text-sm mb-1">
                   Contenido
               </p>
               <div id="editor" class="dark:white">
                   {!! old('contenido', $aviso->contenido ) !!}
               </div>
               <textarea class="hidden" name="contenido" id="content">{{ old('contenido', $aviso->contenido) }}</textarea>
           </div>
   
           <div>
               <p class="text-sm font-medium mb-1 ">Carreras</p>
   
           </div>
   
   
           <div>
               <p class="text-sm font-medium mb-1 ">Estado</p>
   
   
           <div class="flex space-x-3">
               <label class="flex items-center">
                   <input type="radio" name="publicado" value="0" @checked(old('publicado', $aviso->publicado) == 0)>
                   <span class="ml-1">
                       No publicado
                   </span>
               </label class="flex items-center">
               
               <label>
                   <input type="radio" name="publicado" value="1" @checked(old('publicado', $aviso->publicado) == 1)>
                   <span class="ml-1">Publicado</span>
               </label>
               
           </div>
       </div>
        
       <div class="relative mb-2">
   
   
         {{-- Previsualizacion --}}
          {{-- <img class="w-full aspect-video object-cover object-center" src="https://thumb.ac-illust.com/b1/b170870007dfa419295d949814474ab2_t.jpeg" alt=""> --}}
          <img id="imgPreview"  class="w-lg aspect-video object-cover object-center" src="{{$aviso->imagen_ruta ? Storage::url($aviso->imagen_ruta) : 'https://thumb.ac-illust.com/b1/b170870007dfa419295d949814474ab2_t.jpeg' }}" alt="">
   
          <div class="absolute top-8 right-8 dark:text-black">
              <label class="bg-gray-200 px-4 py-2 rounded-lg cursor-pointer">
                  Cambiar Imagen
                  <input class="hidden" type="file" name="imagen_ruta" accept="image/* " onchange="previewImage(event, '#imgPreview')">
              </label>
          </div>
      </div> 
   
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