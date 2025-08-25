<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #f3e2d2;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 12px 30px;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: 2px solid #c6a98d;
            color: #c6a98d;
            background: transparent;
        }

        .btn-custom:hover {
            background: #c6a98d;
            color: #000;
            transform: translateY(-3px);
        }

        footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.9rem;
            color: #f3e2d2;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h1>You're in, {{ auth()->user()->name }}!</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href=" {{ route('user.index') }}" class="btn btn-custom">Go Back</a>
        </form>
    </div>

</body>
</html>
