<x-layouts.administrarum >
    <div class="mb-4 flex justify-between items-left text-xs">
        <flux:breadcrumbs >
            <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item >Administradores</flux:breadcrumbs.item>
        </flux:breadcrumbs>
        <a href="{{ route('admin.admins.create') }}" class="btn btn-blue">Nuevo</a>
    </div>
    <form method="GET" action="{{ route('admin.admins.index') }}" class="mb-4 flex flex-wrap gap-2 items-center">
        <input type="text" name="nombre" value="{{ request('nombre') }}" placeholder="Buscar por nombre" class="border border-gray-300 rounded px-2 py-1 text-sm">
        <input type="text" name="email" value="{{ request('email') }}" placeholder="Buscar por correo" class="border border-gray-300 rounded px-2 py-1 text-sm">
        <select name="rol" class="border border-gray-300 rounded px-2 py-1 text-sm">
            <option value="">Todos los roles</option>
            @foreach ($roles as $rol)
                <option value="{{ $rol->name }}" {{ request('rol') == $rol->name ? 'selected' : '' }}>
                    {{ ucfirst($rol->name) }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-blue text-xs">Filtrar</button>
    </form>
    
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Clave Única</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Correo</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                    <th scope="col" class="px-6 py-3">Carrera(s)</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">
                        {{ $admin->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $admin->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $admin->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $admin->tipo }}
                    </td>
                    <td class="px-6 py-4">
                        @foreach ($admin->carreras as $carrera)
                            <span class="text-xs text-gray-500">{{ $carrera->nombre }}</span>
                            @if (!$loop->last)
                                <span class="text-xs text-gray-500">, </span>
                            @endif
                        @endforeach                    
                    </td>
                    <td class="px-6 py-4" width="10px">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-blue text-xs">Editar</a> 
                            <form class="delete-form" action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-red text-xs">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $admins->links() }}
    </div>
</x-layouts.administrarum>