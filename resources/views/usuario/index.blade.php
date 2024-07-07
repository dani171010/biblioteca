<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
            <!-- Forma correcta de crear botones -->
            <div class="mb-4">
            <a href="{{route('usuario.create')}}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</a>
            </div>

            @livewire('usuario-table')


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
 function confirmDelete(id) {
        alertify.confirm("¿Seguro que quieres eliminar este usuario?",
        function(){
            let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/usuario/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
            alertify.success('Se ha eliminado el usuario correctamente');
        },
        function(){
            alertify.error('No se pudo eliminar el usuario');
        });
    }
</script>
