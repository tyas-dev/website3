<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bulma/css/bulma.css') }}">
    <title>Informasi Beasiswa</title>
</head>
<body>
    <section class="section">
        <div class="container">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ route('beasiswa.index') }}">
                        Home
                    </a>
                    <a class="navbar-item" href="{{ route('profile') }}">
                        Profile
                    </a>
                </div>
            </nav>
            @yield('content')
        </div>
    </section>
</body>
</html>
