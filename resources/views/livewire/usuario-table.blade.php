<div>
    <div class="mb-4">
        <input type="text" wire:model.debounce.300ms="search" wire:keydown.enter="filter" placeholder="Buscar..." class="form-input rounded-md shadow-sm mt-1 block w-full">
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('nombre')">Nombre</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('apellido')">Apellido</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('telefono')">Teléfono</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('email')">Correo electronico</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('documento_t')">tipo de documento</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
              <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$usuario->nombre}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$usuario->apellido}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$usuario->telefono}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$usuario->email}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$usuario->documento_t}}</td>

                <td class="border px-4 py-2 text-center">
                    <div class="flex justify-center">
                        <a href="{{ route('usuario.edit', $usuario->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{$usuario->id }}')">Delete</button>
                    </div>

                </td>
              </tr>
            @endforeach
        </tbody>
    </table>

    {{ $usuarios->links() }}
</div>

