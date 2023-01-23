<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container-sm">

        <div class="titulo">
            <img class="imgElocaLogin" src="https://d1zmtoblzb5ysp.cloudfront.net/c4d00f09-f048-47f2-9fa8-28490fd2e312/images/eloca_logo_pequena.webp" alt="logo-eloca">
        </div>

        <form method="POST" action="{{ route('login') }}" class="formularioLogin">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Insira sua senha">
                <a href="#">Esqueceu a senha ?</a>
            </div>
            <input type="submit" value="enviar" class="btn btn-success">
        </form>

        <div class="n-usuario">
            Não é usuário ? <a href="/users/create" class="btn btn-link">Criar usuario</a>
        </div>

    </div>
</body>





</html>