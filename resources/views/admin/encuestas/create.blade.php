<x-layouts.administrarum>

    @push('css')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @endpush
    
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.encuestas.index') }}">Encuestas</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Crear</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    
    <form action="{{ route('admin.encuestas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mt-4 space-y-6">
    
            <flux:input 
                label="Clave Única de la encuesta" 
                name="cv_encuesta" 
                type="text"
                placeholder="Ej. ENC-2025-01"
                value="{{ old('cv_encuesta') }}" />
            @error('cv_encuesta') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
    
            <flux:input 
                label="Periodo" 
                name="periodo" 
                type="text"
                placeholder="Ej. 2025-1"
                value="{{ old('periodo') }}" />
            @error('periodo') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
    
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <flux:input 
                    label="Fecha de inicio" 
                    name="fecha_inicio" 
                    type="date"
                    value="{{ old('fecha_inicio') }}" />
                <flux:input 
                    label="Hora de inicio" 
                    name="hora_inicio" 
                    type="time"
                    value="{{ old('hora_inicio') }}" />
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <flux:input 
                    label="Fecha de cierre" 
                    name="fecha_cierre" 
                    type="date"
                    value="{{ old('fecha_cierre') }}" />
                <flux:input 
                    label="Hora de cierre" 
                    name="hora_cierre" 
                    type="time"
                    value="{{ old('hora_cierre') }}" />
            </div>
    
            <flux:select 
                label="Tipo de Encuesta" 
                name="cv_tipo_encuesta" 
                placeholder="Selecciona un tipo...">
                @foreach ($tipos_encuestas as $tipo_encuesta)
                    <flux:select.option 
                        value="{{ $tipo_encuesta->cv_tipo_encuesta }}" 
                        :selected="old('cv_tipo_encuesta') == $tipo_encuesta->cv_tipo_encuesta">
                        {{ $tipo_encuesta->nombre }}
                    </flux:select.option>
                @endforeach
            </flux:select>
            @error('cv_tipo_encuesta') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror
    
            
            @error('is_active') 
                <span class="text-sm text-red-500">{{ $message }}</span> 
            @enderror

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Estado de la encuesta</label>
                <div class="flex items-center gap-6">
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="1" class="form-radio text-blue-600"
                            {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
                        <span class="ml-2">Activa</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="0" class="form-radio text-red-600"
                            {{ old('is_active') == '0' ? 'checked' : '' }}>
                        <span class="ml-2">Inactiva</span>
                    </label>
                </div>
                @error('is_active')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
    
            <div class="flex justify-end">
                <flux:button variant="primary" type="submit">
                    Guardar Encuesta
                </flux:button>
            </div>
    
        </div>
    </form>
    
    </x-layouts.administrarum>
    