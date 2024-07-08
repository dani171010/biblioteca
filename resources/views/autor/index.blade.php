<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Autor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
            <!-- Forma correcta de crear botones -->
            <div class="mb-4">
            <a href="{{route('autor.create')}}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</a>
            </div>

            @livewire('autor-table')


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: '¿Seguro que quieres eliminar este autor?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/autor/' + id;

                // Create hidden CSRF input
                let csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token() }}'; // Ensure you have the CSRF token value

                // Create hidden DELETE method input
                let methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';

                form.appendChild(csrfInput);
                form.appendChild(methodInput);

                document.body.appendChild(form);
                form.submit();

                Swal.fire(
                    'Eliminado!',
                    'El autor ha sido eliminado.',
                    'success'
                );
            } else {
                Swal.fire(
                    'Cancelado',
                    'El autor no ha sido eliminado.',
                    'error'
                );
            }
        });
    }
    </script>

