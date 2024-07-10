<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reestablecer contraseña</title>

    <style>
        body {
            background-color: rgb(212, 191, 162);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Figtree', sans-serif;
            color: #333;
        }

        .reset-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 8rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            align-content: center;
        }

        .reset-container h2 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .reset-container label {
            font-weight: 600;
            display: block;
            margin-bottom: 0.5rem;
        }

        .reset-container input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .reset-container input:focus {
            border-color: rgb(212, 181, 136);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 45, 32, 0.2);
        }

        .reset-container .actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .reset-container .actions button {
            padding: 0.75rem 1.5rem;
            background-color: rgb(212, 181, 136);
            color: #000000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .reset-container .actions button:hover {
            background-color: #d87e79;
        }
    </style>
</head>
<body>

    <div class="reset-container">
        <h2>Reestablecer contraseña</h2>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Olvidaste tu contraseña? No hay problema. Restablece tu contraseña aquí') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label for="email">{{ __('Correo') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="actions mt-4">
                <button type="submit">
                    {{ __('Reestablecer contraseña') }}
                </button>
            </div>
        </form>
    </div>

</body>
</html>


        