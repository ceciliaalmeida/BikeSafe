<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    {{-- fontes do google--}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Capriola" rel="stylesheet">

    {{-- css bootsstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    {{-- css da aplicação--}}
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="" class="navbar-brand">
                    <img src="https://img.icons8.com/nolan/64/tricycle.png" />
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Bikes</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar Bikes</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastro</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
    <footer>
        <p>Bike Safe &copy; 2020</p>
    </footer>

</body>

</html>
