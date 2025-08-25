<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>

    <style>
        body {
            background-color: #000;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
        }

        .login-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #1a1a1a;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.6);
            color: #f3e2d2;
        }

        .card h2 {
            text-transform: uppercase;
            font-weight: 700;
            color: #f3e2d2;
        }

        .form-label {
            font-weight: 500;
            color: #f3e2d2;
        }

        .form-control {
            background: #2a2a2a;
            border: 1px solid #444;
            color: #f3e2d2;
            border-radius: 10px;
        }

        .form-control:focus {
            background: #2a2a2a;
            color: #f3e2d2;
            border-color:#2a2a2a;
            box-shadow: 0 0 8px #c6a98d;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-danger {
            background: #c6a98d;
            border: none;
            color: #2a2a2a;
        }

        .btn-danger:hover {
            background: none;
            border: 2px solid #c6a98d;
            color: #c6a98d;
        }

        .btn-outline-danger {
            border: 2px solid #c6a98d;
            color: #c6a98d;
            margin-top: 10px;
        }

        .btn-outline-danger:hover {
            background: #c6a98d;
            color: #2a2a2a;
            border-color: #000;
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class="card p-4 shadow" style="width: 350px;">
        <h2 class="text-center mb-3">Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-danger w-100 btn-custom">Login</button>
        </form>

        <a href="{{ route('user.index') }}" class="btn btn-outline-danger w-100 btn-custom">Go Back</a>
        <a href="{{ route('user.index') }}" class="btn btn-outline-danger w-100 btn-custom">Go Back</a>
    </div>
</div>
</body>
</html>
