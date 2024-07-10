<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>

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

        .register-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            align-content: center;
        }

        .register-container h2 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .register-container label {
            font-weight: 600;
            display: block;
            margin-bottom: 0.5rem;
        }

        .register-container input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .register-container input:focus {
            border-color: rgb(212, 181, 136);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 45, 32, 0.2);
        }

        .register-container .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .register-container .checkbox-container input {
            margin-right: 0.5rem;
        }

        .register-container .checkbox-container span {
            font-size: 0.875rem;
            color: #000000;
        }

        .register-container .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .register-container .actions a {
            font-size: 0.875rem;
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .register-container .actions a:hover {
            color: #333;
        }

        .register-container .actions button {
            padding: 0.75rem 1.5rem;
            background-color: rgb(212, 181, 136);
            color: #000000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .register-container .actions button:hover {
            background-color: #d87e79;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Registrar</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">{{ __('Nombre') }}</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <label for="email">{{ __('Correo') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div>
                <label for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <label for="password_confirmation">{{ __('Confirmar contraseña') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="checkbox-container">
                    <input id="terms" type="checkbox" name="terms" required />
                    <span>
                        {!! __('Acepto los :terms_of_service y la :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Términos de Servicio').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Política de Privacidad').'</a>',
                        ]) !!}
                    </span>
                </div>
            @endif

            <div class="actions">
                <a href="{{ route('login') }}">
                    {{ __('Ya estás registrado?') }}
                </a>

                <button type="submit">
                    {{ __('Registrar') }}
                </button>
            </div>
        </form>
    </div>

</body>
</html>
