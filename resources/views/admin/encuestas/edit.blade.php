<x-layouts.administrarum >
    @push('css')
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @endpush
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.encuestas.index') }}">Encuestas</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>   
    </flux:breadcrumbs>             
    <form action="{{ route('admin.encuestas.update', $encuesta) }}" method="POST" enctype="multipart/form-data">        
        @csrf
        @method('PUT')
        <div class="card mt-4 space-y-4">
            <flux:input label="Periodo" name="periodo" value="{{ old('periodo', $encuesta->periodo) }}"             
            placeholder="Escribe el periodo" type="text" class="mb-2"/>

            <flux:input label="Fecha de inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $encuesta->fecha_inicio) }}"             
                placeholder="Escribe la fecha de inicio" type="date" class="mb-2"/>

            <flux:input label="Hora de inicio" name="hora_inicio" value="{{ old('hora_inicio', $encuesta->hora_inicio) }}"             
                placeholder="Hora de inicio" type="time" class="mb-2"/>

            <flux:input label="Fecha de cierre" name="fecha_cierre" value="{{ old('fecha_cierre', $encuesta->fecha_cierre) }}"             
                placeholder="Escribe la fecha de cierre" type="date" class="mb-2"/>

            <flux:input label="Hora de cierre" name="hora_cierre" value="{{ old('hora_cierre', $encuesta->hora_cierre) }}"             
                placeholder="Hora de cierre" type="time" class="mb-2"/>

            <flux:select label="Tipo de Encuesta" placeholder="Elige un tipo de encuesta" name="cv_tipo_encuesta">
                @foreach ($tipos_encuestas as $tipo_encuesta)
                    <flux:select.option value="{{ $tipo_encuesta->cv_tipo_encuesta }}" :selected="old('cv_tipo_encuesta', $encuesta->cv_tipo_encuesta) == $tipo_encuesta->cv_tipo_encuesta">{{ $tipo_encuesta->nombre }}</flux:select.option>
                @endforeach
            </flux:select>              
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Estado de la encuesta</label>
                <div class="flex items-center gap-6">
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="1" class="form-radio text-blue-600"
                            {{ old('is_active', $encuesta->is_active) == '1' ? 'checked' : '' }}>
                        <span class="ml-2">Activa</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="0" class="form-radio text-red-600"
                            {{ old('is_active', $encuesta->is_active) == '0' ? 'checked' : '' }}>
                        <span class="ml-2">Inactiva</span>
                    </label>
                </div>
                @error('is_active')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            

            <div class="flex justify-end">
                <flux:button variant="primary" type="Submit">Enviar</flux:button>         
            </div>
        </div>
    </form>

   
</x-layouts.administrarum>


   