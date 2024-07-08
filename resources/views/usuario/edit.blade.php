<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                <form method="POST" action="{{route('usuario.update', $usuario->id)}}" class="max-w-lg mx-1.5 " >
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Nombre</label>
                    <input name="nombre" id="nombre" value="{{old('nombre', $usuario->nombre)}}" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Apellido</label>
                        <input name="apellido" id="nombre" value="{{old('apellido', $usuario->apellido)}}" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                    <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                    <input  name="email" id="email" value="{{old('email', $usuario->email)}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="{{old('telefono', $usuario->telefono)}}"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="mb-5">
                        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de documento </label>
                        <select name="documento_t" id="tipo_documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="" @if(old('documento_t', $usuario->documento_t) == '') selected @endif></option>
                            <option value="cc" @if(old('documento_t', $usuario->documento_t) == 'cc') selected @endif>Cédula de ciudadania (CC)</option>
                            <option value="ce" @if(old('documento_t', $usuario->documento_t) == 'ce') selected @endif>Cédula de extranjería (CE)</option>
                            <option value="nit" @if(old('documento_t', $usuario->documento_t) == 'nit') selected @endif>Número de identificación tibutario (NIT)</option>
                            <option value="pp" @if(old('documento_t', $usuario->documento_t) == 'pp') selected @endif>Pasaporte (PP)</option>
                        </select>

                        </div>

                    <div class="mb-5">
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento</label>
                    <input type="text" id="documento" name="documento" value="{{old('documento', $usuario->documento)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>


                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                    <a href="{{ route('usuario.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>


