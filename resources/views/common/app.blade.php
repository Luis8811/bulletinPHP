<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Boletines del siglo XXI - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        @section('sidebar')
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="../public/index">Estad&iacute;sticas</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="../public/users">Listado de suscriptores</a></li>
                <li><a href="../public/sign_up">Agregar suscriptor</a></li>
              </ul>
            </div>
          </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
