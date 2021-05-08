<!DOCTYPE html>
<html lang="en">
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: #0d6efd ;
          color: #ffffff;
          text-align: center;
        }

        .logo {
            color: #f8f9fa;
            text-shadow: 2px 2px orangered;
        }
        </style>
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
        <header>
            <div class="container-fluid" style="background-color: #0d6efd;">
                <h1 class="logo">Boletines del siglo XXI</h1>
            </div>
        </header>
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
        <footer class="footer">
            d
        </footer>
    </body>
</html>
