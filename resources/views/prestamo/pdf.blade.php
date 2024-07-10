<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestamo</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header  h1 {
            text-align: center;
            font-size: 70px;

        }
        .logo{
            width: 150px;
            height: 150px;

        }
        .logotipo{
            padding-top: 100px;
            text-align: right;
            display: inline-block;

        }
        .prestamo{
            display: inline-block;
            width: 70%;
            height: 200px;

        }

        table{
            padding-top: 20px;
            border-collapse: collapse; /* Remove borders between cells */
    width: 100%; /* Make the table span the full width of its container */
    margin: 10px auto;
        }
        .section {
            padding-left: 40px;
        }
        th,td{
            border: 1px solid #ccc; /* Add a thin border to each cell */
             padding: 5px; /* Add padding around the content in each cell */
             text-align: center; /* Align text to the left */
             vertical-align: middle; /* Vertically align the content in the middle of the cells */
              font-size: 18px;
        }
        .footer{
            padding-top: 40px;
            text-align: center;
        }

    </style>
</head>
<body>
         <header>
            <div class="prestamo">
            <h1>PRESTAMO</h1>
            </div>
            <div class="logotipo" >
            <img class="logo" src="{{ public_path('/img/logo.png') }}" alt="Logo ">
            <p class="subtitle">Factura de prestamo<br>Biblioteca OpenSource<br>2024</p>
            </div>
         </header>
        <div class="section">
            <p>Datos del Cliente</p>
            <p>{{ $prestamo->usuario->nombre }}</p>

            <p>N° Factura:</p>
            <p>{{ $prestamo->id }}</p>

            <p>Fecha de entrega:</p>
            <p>{{ $prestamo->entrega_f }}</p>

        </div>
        <table>
            <thead>
                <tr>
                    <th>CÓDIGO</th>
                    <th>LIBRO</th>
                    <th>PAGINAS</th>
                    <th>FECHA DE DEVOLUCION</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro )

                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->paginas }}</td>
                    <td>{{ $prestamo->devolucion_f }}</td>

                </tr>

                @endforeach

            </tbody>
        </table>
        <div class="footer">
            <img class="logo" src="{{ public_path('/img/logo.png') }}" alt="Logo ">
        </div>
</body>
</html>
