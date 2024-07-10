<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(212, 191, 162);
            margin: 0;
            padding: 0;
        }

        .font-semibold {
            font-weight: 600;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .text-gray-800 {
            color: #2d3748;
        }

        .dark:text-gray-200 {
            color: #edf2f7;
        }

        .leading-tight {
            line-height: 1.25;
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .max-w-7xl {
            max-width: 80rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .bg-white {
            background-color: #ffffff;
        }

        .dark:bg-gray-800 {
            background-color: #2d3748;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .shadow-xl {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .sm\:rounded-lg {
            border-radius: 0.5rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .lg\:p-8 {
            padding: 2rem;
        }

        .border-b {
            border-bottom-width: 1px;
        }

        .border-gray-200 {
            border-color: #edf2f7;
        }

        .dark:border-gray-700 {
            border-color: #4a5568;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .text-white {
            color: #ffffff;
        }

        .bg-yellow-700 {
            background-color: #f59e0b;
        }

        .hover\:bg-yellow-800:hover {
            background-color: #ed8936;
        }

        .focus\:ring-4:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }

        .focus\:outline-none:focus {
            outline: none;
        }

        .focus\:ring-blue-300:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }

        .font-medium {
            font-weight: 500;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .w-full {
            width: 100%;
        }

        .sm\:w-auto {
            width: auto;
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .py-2.5 {
            padding-top: 0.625rem;
            padding-bottom: 0.625rem;
        }

        .text-center {
            text-align: center;
        }

        .dark:bg-blue-600 {
            background-color: #2b6cb0;
        }

        .dark:hover:bg-blue-700:hover {
            background-color: #2c5282;
        }

        .dark:focus\:ring-blue-800:focus {
            box-shadow: 0 0 0 3px rgba(48, 140, 122, 0.5);
        }

        .table-container {
            background-color: rgb(212, 181, 136);
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #000000; /* Cambiado a negro */
            color: #000000; /* Texto negro */
        }

        .table th {
            background-color: #f7fafc;
            font-weight: 600;
        }

        .table td {
            background-color: #ffffff;
        }

        /* Estilos específicos para Livewire */
        @livewire('usuario-table') {
            /* Aquí van los estilos para el componente Livewire si es necesario */
        }

        footer {
            display: flex;
            justify-content: center;
            padding: 1rem;
            background-color: rgb(212, 181, 136);
            color: #555;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Usuarios') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-yellow-100 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8" style="background-color: rgb(212, 181, 136);">
                    <div class="bg-white dark:bg-yellow-100 border-b border-gray-200 dark:border-gray-700" style="background-color: rgb(212, 181, 136);">
                
                        <!-- Forma correcta de crear botones -->
                        <div class="mb-4">
                            <a href="{{ route('usuario.create') }}" class="text-black bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</a>
                        </div>
    
                        <div class="table-container">
                            @livewire('usuario-table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer>
            Biblioteca OpenSource | Todos los derechos reservados.
        </footer>
    </x-app-layout>
</body>
</html>


<script>
    function confirmDelete(id) {
        Swal.fire({
            title: '¿Seguro que quieres eliminar este usuario?',
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
                form.action = '/usuario/' + id;

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
                    'El usuario ha sido eliminado.',
                    'success'
                );
            } else {
                Swal.fire(
                    'Cancelado',
                    'El usuario no ha sido eliminado.',
                    'error'
                );
            }
        });
    }
    </script>

