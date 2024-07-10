<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <style>
        body {
            background-color: rgb(212, 191, 162);
            font-family: Arial, sans-serif; /* Puedes ajustar la fuente según tus preferencias */
            margin: 0; /* Ajustar márgenes para eliminar el espacio adicional */
            padding: 0; /* Ajustar relleno para eliminar el espacio adicional */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ajusta el tamaño mínimo del cuerpo para ocupar toda la pantalla */
        }

        nav {
            background-color: rgb(212, 181, 136); /* Color de fondo del header y del nav */
            /* Agrega otros estilos específicos para el header y el nav aquí si es necesario */
            padding: 10px; /* Ejemplo de ajuste de relleno para el header y el nav */
        }

        main{
            justify-content: center; /* Centrar horizontalmente el contenido */
            align-items: center; /* Centrar verticalmente el contenido */
        }

        .background {
            flex: 1; /* Ocupar todo el espacio disponible */
            display: flex;
            justify-content: center; /* Centrar horizontalmente el contenido */
            align-items: center; /* Centrar verticalmente el contenido */
        }
        h1, h3 {
            text-align: center; /* Centrar el texto de los títulos */
            margin-bottom: 0; /* Elimina el margen inferior predeterminado */
        }
        img {
            max-width: 100%; /* Asegura que la imagen no exceda el ancho del contenedor */
            height: auto; /* Hace que la altura de la imagen se ajuste automáticamente */
            display: block; /* Elimina el espacio adicional debajo de la imagen */
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }

        footer {
            background-color: rgb(212, 181, 136); /* Color de fondo del footer */
            /* Agrega otros estilos específicos para el footer aquí si es necesario */
            padding: 10px; /* Ejemplo de ajuste de relleno para el footer */
            text-align: center; /* Centrar el texto del footer */
            color: white; /* Color del texto del footer */
        }

        h1 {
            text-align: center; /* Centrar el texto del h1 */
        }
    </style>
</head>
<body>

    <x-app-layout>
        <x-slot name="header">
            <header>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
                    {{ __('INICIO') }}
                </h2>
            </header>
        </x-slot>

        <div class="background">
            <main>
                <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
                    {{ __('ADMINISTRADOR OPEN SOURCE') }}
                    
                </h1>
                <img src="{{ asset('images/snfondo.png') }}" alt="Biblioteca logo">
                <!-- Contenido principal de tu página -->
                <br/>
                <br/>

                <div class="ambiente">
                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
                    {{ __('AMBIENTE LECTOR') }}
                </h3>
                <p>-En OpenSource contamos con un agradable ambiente de lectura, junto con la infraestructura adecuada para una lectura agradable, tambien contamos con un amplia variedad de libros.</p>
                <p>-Registrate y obten reconocimientos y premios por tener nuestra menbresia VIP.</p>
                <p>-Si eres estudiante recibe premios por las donaciones de tus libros.</p>
                <br>
                <br>
                <br>
                <br>
                
            </div>
            </main>
        </div>

        <footer>
            Biblioteca OpenSource | Todos los derechos reservados.
        </footer>
    </x-app-layout>

</body>
</html>



