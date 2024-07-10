<div>
    <div class="mb-4">
        <input type="text" wire:model.debounce.300ms="search" wire:keydown.enter="filter" placeholder="Buscar..." class="form-input rounded-md shadow-sm mt-1 block w-full">
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2 text-gray-900 dark:text-black text-center cursor-pointer" wire:click="sortBy('name')">Nombre</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-black text-center cursor-pointer" wire:click="sortBy('nacionalidad')">Nacionalidad</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-black text-center cursor-pointer">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($autors as $autor)
              <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$autor->name}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$autor->nacionalidad}}</td>
                <td class="border px-4 py-2 text-center">
                    <div class="flex justify-center">
                        <a href="{{ route('autor.edit', $autor->id) }}" class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mr-2">Editar</a>
                        <button type="button" class="bg-red-400 dark:bg-red-600 hover:bg-red-500 dark:hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{$autor->id }}')">Eliminar</button>
                    </div>

                </td>
              </tr>
            @endforeach
        </tbody>
    </table>

    {{ $autors->links() }}
</div>

