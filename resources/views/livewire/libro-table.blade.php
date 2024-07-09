<div>
    <div class="mb-4">
        <input type="text" wire:model.debounce.300ms="search" wire:keydown.enter="filter" placeholder="Buscar..." class="form-input rounded-md shadow-sm mt-1 block w-full">
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('titulo')">Titulo</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('autor_id')">Autor</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('editorial_id')">Editorial</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('paginas')">Paginas</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('publicacion')">Fecha de publicacion</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
              <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$libro->titulo}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$libro->autor->name}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$libro->editorial->name}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$libro->paginas}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$libro->publicacion}}</td>

                <td class="border px-4 py-2 text-center">
                    <div class="flex justify-center">
                        <a href="{{ route('libro.edit', $libro->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{$libro->id }}')">Delete</button>
                    </div>

                </td>
              </tr>
            @endforeach
        </tbody>
    </table>

    {{ $libros->links() }}
</div>

