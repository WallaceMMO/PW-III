<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/@yield('css')">
</head>
<body>

    <header>
        <nav>
            nav foda
        </nav>
    </header>

    <section>
        @yield('container')
    </section>

    <footer>
        footer foda
    </footer>
</body>
</html>