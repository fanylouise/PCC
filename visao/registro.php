<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../css/registro.css">
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="../WOH/assets/logo/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="../WOH/assets/logo/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="../WOH/assets/logo/favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">
</head>
<?php
    //código para restringir acesso a pagina para quem não esta
    //logado
    session_start();
    //verifica se o usuário esta logado
    if(!isset($_SESSION["perfil"]) || empty($_SESSION["perfil"])  ){
     header("location:login.php?msg=Essa página precisa estar logado");    
    }
    if($_SESSION["perfil"]!="1"){//verifica se o usuario é administrador
        header("location:login.php?msg=O usuário precisa ser ADM");    
    }
?>
<body>
    <h1>Registrar</h1>
    <div class="formulario">
        <div>
            <?php
                if(isset($_GET["msg"])){
                    echo $_GET["msg"];
                }

            ?>
        </div>
        <form action="../controle/registrarUsuarioControler.php" method="post">
            <table>
                <tr>
                    <th><p><label for="nome">Nome:</label></p></th>
                    <td><input type="text" name="nome" id="nome" autocomplete="off"></td>
                </tr>
                <tr>
                    <th><p><label for="usuario">Usuario:</label></p></th>
                    <td><input type="text" name="usuario" id="usuario" autocomplete="off"></td>
                </tr>
                <tr>
                    <th><p><label for="senha">Senha:</label></p></th>
                    <td><input type="password" name="senha" id="senha" autocomplete="off"></td>
                </tr>
                <tr>
                    <th><p><label for="email">E-mail:</label></p></th>
                    <td><input type="text" name="perfil" id="email" autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="submit"><input type="submit" value="Enviar"></p></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
