<x-layouts.administrarum >
    @push('css')
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @endpush
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.admins.index') }}">Administradores</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Editar</flux:breadcrumbs.item>   
    </flux:breadcrumbs>
    <form action="{{ route('admin.admins.update', $admin) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card mt-4 space-y-4">
            <flux:input label="Nombre" name="nombre" value="{{ old('nombre', $admin->name) }}"
                placeholder="Nombre del usuario administrador" type="text" class="mb-2"/>
            
            <flux:input label="Correo Electrónico" name="correo" value="{{ old('correo', $admin->email) }}"
                placeholder="Correo del administrador" type="email" class="mb-2"/>

            <flux:select label="Tipo" placeholder="Elige un tipo" name="tipo">
                <flux:select.option value="DBA" :selected="old('tipo', $admin->tipo) === 'DBA'">DBA</flux:select.option>
                <flux:select.option value="Jefe de Departamento" :selected="old('tipo', $admin->tipo) === 'Jefe de Departamento'">Jefe de Departamento</flux:select.option>
            </flux:select>

              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Estado del Admin</label>
                <div class="flex items-center gap-6">
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="1" class="form-radio text-blue-600"
                            {{ old('is_active', $admin->is_active) == '1' ? 'checked' : '' }}>
                        <span class="ml-2">Activo</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_active" value="0" class="form-radio text-red-600"
                            {{ old('is_active', $admin->is_active) == '0' ? 'checked' : '' }}>
                        <span class="ml-2">Inactivo</span>
                    </label>
                </div>
                @error('is_active')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>            

            <flux:checkbox.group name="carreras[]" label="Seleccione las carreras a las que pertenece el administrador">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($carreras as $carrera)
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="carreras[]" id="carrera_{{ $carrera->cv_carrera }}" value="{{ $carrera->cv_carrera }}"
                            {{ in_array($carrera->cv_carrera, $checkedCarreras) ? 'checked' : '' }}>
                        <label for="carrera_{{ $carrera->cv_carrera }}">{{ $carrera->nombre }}</label>
                    </div>
                @endforeach
                </div>
            </flux:checkbox.group>

            <div class="flex justify-end">
                <flux:button variant="primary" type="Submit">Enviar</flux:button>         
            </div>
        </div>
    </form>
</x-layouts.administrarum>