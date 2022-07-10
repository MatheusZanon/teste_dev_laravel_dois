<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1">

        <title>Teste Laravel API</title>

        <link href="{{mix('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark justify-content-center">
            <h1>Teste Laravel 8 com API Rest - Matheus Zanon</h1>
        </nav>



        <div class="mainWindow">
            <div class="container relative flex items-top justify-center sm:items-center">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    <script src="{{mix('js/app.js')}}" defer></script>
    </body>

</html>
