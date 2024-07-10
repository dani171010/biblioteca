<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            align-content: center;
        }

        .login-container h2 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .login-container label {
            font-weight: 600;
            display: block;
            margin-bottom: 0.5rem;
        }

        .login-container input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        .login-container input:focus {
            border-color: rgb(212, 181, 136);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 45, 32, 0.2);
        }

        .login-container .checkbox-container {
            display: flex;
            margin-bottom: 1rem;
        }


        .login-container .checkbox-container {
            font-size: 0.875rem;
            color: #000000;
            text-align: left;
            justify-content: center;
            margin-right: 20.5rem;
        }

        .login-container .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .login-container .actions a {
            font-size: 0.875rem;
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-container .actions a:hover {
            color: #333;
        }

        .login-container .actions button {
            padding: 0.75rem 1.5rem;
            background-color: rgb(212, 181, 136);
            color: #000000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .login-container .actions button:hover {
            background-color: #d87e79;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>LOGIN</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div>
                <label for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="checkbox-container">
                <input id="remember_me" type="checkbox" name="remember" />
                <span>{{ __('Recuerdame') }}</span>
            </div>

            <div class="actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <button type="submit">
                    {{ __('Entrar') }}
                </button>
            </div>
        </form>
    </div>
    
</body>
</html>
