<div>
    <div class="mb-4">
        <input type="text" wire:model.debounce.300ms="search" wire:keydown.enter="filter"  placeholder="Buscar..." class="form-input rounded-md shadow-sm mt-1 block w-full">
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('id')">Prestamo no</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('entrega_f')">Fecha Entrega</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center cursor-pointer" wire:click="sortBy('libro_id')">libro</th>
                <th class="border px-4 py-2 text-gray-900 dark:text-white text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prestamos as $prestamo)
                <tr>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $prestamo->id }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $prestamo->entrega_f }}</td>
                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $prestamo->usuario->nombre }}</td>
                    <td class="border px-4 py-2 text-center">
                        <div class="flex justify-center">
                            <a href="{{ route('prestamo.show', $prestamo->id) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded mr-2">Descargar PDF</a>
                            <button type="button" class="bg-pink-400 dark:bg-pink-600 hover:bg-pink-500 dark:hover:bg-pink-700 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $prestamo->id }}')">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $prestamos->links() }}
</div>

