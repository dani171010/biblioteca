<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OpenSource</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-color: rgb(212, 191, 162);
                margin: 0;
                font-family: 'Figtree', sans-serif;
                color: #333;
            }
            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: rgb(212, 181, 136);
                padding: 1rem 5rem;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .img img {
                height: 80px; /* Ajustar tamaño de la imagen */
            }

            nav {
                display: flex;
                gap: 2rem;
            }

            nav a {
                font-weight: 600;
                color: #333;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            nav a:hover {
                color: #fcfcfc;
            }

            main {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 2rem;
                min-height: 80vh;
            }

            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2rem;
            }

            .columns {
                display: flex;
                gap: 2rem;
                justify-content: center;
                margin-top: 2rem;
            }

            .mision, .vision {
                width: 45%;
                text-align: justify;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 1rem;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            footer {
                display: flex;
                justify-content: center;
                padding: 1rem;
                background-color: rgb(212, 181, 136);
                color: #555;
                box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            }

            h1, h2 {
                margin: 0;
                font-weight: 600;
            }

            p {
                margin: 0.5rem 0;
            }

        </style>
    </head>
    <body>
        <header>
            <div class="img">
                <!-- logo nav -->
                <img src="{{ asset('images/80.png') }}" alt="logo">
            </div>
            @if (Route::has('login'))
                <nav class="nav">
                    @auth
                        <a href="{{ url('/dashboard') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main>
            <div class="content">
                <h1>BIENVENIDO AL ADMINISTRADOR DE LA BIBLIOTECA</h1>
                <h2>BIENVENIDO DE VUELTA ADMINISTRADOR</h2>
                <img src="{{ asset('images/snfondo.png') }}" alt="Biblioteca logo">
                <div class="columns">
                    <div class="mision">
                        <h2>MISIÓN</h2>
                        <p>Facilitar la gestión y administración eficiente entre bibliotecas mediante una plataforma intuitiva y funcional, que permita organizar, catalogar y prestar recursos de manera efectiva.</p>
                        <p>Promoviendo el acceso a la información y con ello la implementación de aplicaciones inteligentes para optimizar este tipo de tareas.</p>
                    </div>
                    <div class="vision">
                        <h2>VISIÓN</h2>
                        <p>Convertirnos en la herramienta de referencia para la administración de bibliotecas, apoyando a instituciones educativas y culturales en su labor de fomentar el conocimiento, y contribuyendo al desarrollo de comunidades lectoras a través de la innovación y la tecnología.</p>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            Biblioteca OpenSource | Todos los derechos reservados.
        </footer>
    </body>
</html>

