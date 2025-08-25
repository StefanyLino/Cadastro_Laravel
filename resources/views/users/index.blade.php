<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bem-vindo(a)!</title>

    <style>
        body {
            background-color: #000000ff;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
        }

        h1{
            text-transform: uppercase;
        }

        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.3rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #f3e2d2;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 12px 35px;
            font-size: 1.1rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
        }

        .btn-login {
            border: 2px solid #c6a98d;
            color: #c6a98d;
            background: transparent;
        }

        .btn-login:hover {
            background: #c6a98d;
            color: #4a2c2a;
        }

        .btn-cadastrar {
            border: 2px solid #c6a98d;
            color: #c6a98d;
            background: transparent;
        }

        .btn-cadastrar:hover {
            background: #c6a98d;
            color: #4a2c2a;
        }

        footer {
            text-align: center;
            padding: 15px 0;
            font-size: 0.9rem;
            color: #f3e2d2;
            background: rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="hero">
        <div>
            <h1>Hello.</strong></h1>
            <a href="{{ route('login.form') }}" class="btn btn-custom btn-login">Login</a>
            <a href="{{ route('user.create') }}" class="btn btn-custom btn-cadastrar">Sign Up</a>
        </div>
    </div>

    <footer>
        © 2024 - Todos os direitos reservados.
    </footer>
</body>
</html>
