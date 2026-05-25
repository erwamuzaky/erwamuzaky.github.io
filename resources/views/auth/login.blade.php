<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login Dashboard</title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

</head>

<body class="login-body">

<div class="login-container">

    <div class="login-card">

        <div class="login-logo">
            📚
        </div>

        <h2>Login Dashboard</h2>

        <p>
            Sistem CRUD Laravel Modern
        </p>

        @if (session('error'))

            <div class="login-error">

                {{ session('error') }}

            </div>

        @endif

        <form action="{{ route('login.proses') }}"
              method="POST">

            @csrf

            <div class="form-group">

                <label>Username</label>

                <input type="text"
                       name="username"
                       placeholder="Masukan username">

            </div>

            <div class="form-group">

                <label>Password</label>

                <input type="password"
                       name="password"
                       placeholder="Masukan password">

            </div>

            <button type="submit"
                    class="login-btn">

                Login

            </button>

        </form>

    </div>

</div>

</body>
</html>