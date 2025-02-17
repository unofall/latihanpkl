<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #fefefe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }
        .login-wrapper {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            width: 100%;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
        }
        .login-container h3 {
            text-align: center;
            font-weight: 600;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #7289ef;
            border: none;
            font-size: 18px;
            padding: 10px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #667eea;
        }
        .forgot-password {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .login-image {
            width: 350px;
            height: auto;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <img src="{{ asset('assets/img/🤨.jpg') }}" alt="Illustration of a thoughtful person" class="login-image rounded">
        <div class="login-container">
            @if (session()->has('pesan'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <h3 class="mb-4">Login</h3>
            <form method="POST" action="/auth">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password Anda" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 m-1">Login</button>

                <div class="text-center mt-3" style="font-size: 13px">
                    <span>Belum punya akun? <a href="/register" class="forgot-password">Daftar di sini</a></span>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
