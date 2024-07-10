<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
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

        .dark:bg-yellow-100 {
            background-color: rgb(212, 181, 136); /* Mantuve el color de fondo original */
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
                {{ __('Editar Usuario') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-yellow-200 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8" style="background-color: rgb(212, 181, 136);">

                    <form method="POST" action="{{ route('usuario.update', $usuario->id) }}" class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-lg mx-auto">
                        @csrf
                        @method('PUT')

                        <div class="mb-5">
                            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre</label>
                            <input name="nombre" id="nombre" value="{{ old('nombre', $usuario->nombre) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mb-5">
                            <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Apellido</label>
                            <input name="apellido" id="apellido" value="{{ old('apellido', $usuario->apellido) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Correo</label>
                            <input name="email" id="email" value="{{ old('email', $usuario->email) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mb-5">
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $usuario->telefono) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="mb-5">
                            <label for="tipo_documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tipo de documento</label>
                            <select name="documento_t" id="tipo_documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="" @if(old('documento_t', $usuario->documento_t) == '') selected @endif></option>
                                <option value="cc" @if(old('documento_t', $usuario->documento_t) == 'cc') selected @endif>Cédula de ciudadanía (CC)</option>
                                <option value="ce" @if(old('documento_t', $usuario->documento_t) == 'ce') selected @endif>Cédula de extranjería (CE)</option>
                                <option value="nit" @if(old('documento_t', $usuario->documento_t) == 'nit') selected @endif>Número de identificación tributaria (NIT)</option>
                                <option value="pp" @if(old('documento_t', $usuario->documento_t) == 'pp') selected @endif>Pasaporte (PP)</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Documento</label>
                            <input type="text" id="documento" name="documento" value="{{ old('documento', $usuario->documento) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                        <div class="col-span-2">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                            <a href="{{ route('usuario.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                        </div>
                    </form>

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
        
        <footer>
            Biblioteca OpenSource | Todos los derechos reservados.
        </footer>
    </x-app-layout>
</body>
</html>



