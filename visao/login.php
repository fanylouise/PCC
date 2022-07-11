<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--Estilo CSS -->
    <link rel="stylesheet" href="../css/login2 copy.css">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="../WOH/assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../WOH/assets/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../WOH/assets/logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <title>World of Hope</title>
</head>

<body>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E entre para o nosso time</h1>
            <img src="../assets/good-team-animate.svg" class="left-login-image"
                alt="dois homens e uma mulher interagindo ">
        </div>

        <form action="../controle/loginControle.php" method="post">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>
                    <div class="textfield">
                        <label for="e-mail">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>
                    <a href="#">
                        Recuperar senha
                    </a>
                    <button type="submit" value="entrar" class="btn-login">Entrar</button>

                </div>
            </div>
    </div>
    </form>
    <!--JS-->
    <script src="./assets/js/js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js.bootstrap.min.js">
    </script>
</body>

</html>