<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja de Carros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('adm.index') }}">telaAdm</a></li>
                <li><a href="{{ route('produtos.index') }}">telaUsuario</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Minha Loja de Carros</p>
    </footer>
</body>
</html>
