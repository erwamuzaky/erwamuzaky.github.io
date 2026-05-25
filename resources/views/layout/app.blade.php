<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Buku</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    

    {{-- SIDEBAR --}}
    @include('layout.sidebar')

    {{-- MAIN --}}
    <main class="main-wrapper">

        {{-- TOPBAR --}}
        <div class="topbar">

    <div class="topbar-left">

        <button id="menu-toggle"
                class="menu-toggle">

            ☰

        </button>

        <div class="topbar-text">

            <h2>
                Dashboard Buku
            </h2>

            <p>
                Bacalah Buku, Temukan Dunia
            </p>

        </div>

    </div>

    <div class="admin-box">

        👤 Admin

    </div>

</div>

        {{-- CONTENT --}}
        @yield('content')

    </main>
    <script>

document.addEventListener('DOMContentLoaded', function () {

    const toggleBtn =
        document.getElementById('menu-toggle');

    const sidebar =
        document.getElementById('sidebar');

    const mainWrapper =
        document.querySelector('.main-wrapper');

    toggleBtn.addEventListener('click', function () {

        sidebar.classList.toggle('active');

        mainWrapper.classList.toggle('shift');

    });

});

</script>

</body>

</html>