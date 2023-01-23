<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

  <script src="/js/script.js"></script>
  <title>@yield('title')</title>
</head>


<body>
  <header class="bg-light">
    <nav class="navbar navbar-expand-lg bg-body-tertiary container">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://d1zmtoblzb5ysp.cloudfront.net/c4d00f09-f048-47f2-9fa8-28490fd2e312/images/eloca_logo_pequena.webp" alt="eloca"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/clients/create">Criar Cliente</a>
            </li>

            @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="row">
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>



  <footer class="bg-dark navbar-fixed-bottom">
    <p class="text-white-50 mt-4">Eloca &copy; 2023 | Vitor Prado</p>
  </footer>

</body>

</html>