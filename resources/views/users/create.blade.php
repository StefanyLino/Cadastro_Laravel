<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #1a1a1a;
            border: none;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.6);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-transform: uppercase;
            font-weight: 700;
            color: #f3e2d2;
        }

        label {
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

        #name::placeholder {
            color: #f3e2d2; 
            opacity: 0.4;
        }

        #email::placeholder {
            color: #f3e2d2; 
            opacity: 0.4;
        }

        #password::placeholder {
            color: #f3e2d2; 
            opacity: 0.4;
        }
        
    </style>
</head>
<body>
    <div class="card text-center">
        <h1>Sign Up</h1>

        @if ($errors->any())
            <div class="alert alert-danger text-start">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
        @endif

        <form action="{{ route('user-store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-3 text-start">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3 text-start">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your e-mail" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-danger w-100 btn-custom">Sign Up</button>
        </form>

        <a href="{{ route('user.index') }}" class="btn btn-outline-danger w-100 btn-custom">Go Back</a>
    </div>
</body>
</html>
