<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <h1>Login</h1>
    <div class="formulario">
        <div>
            <?php
                if(isset($_GET["msg"])){
                    echo $_GET["msg"];
                }

            ?>
        </div>
        <form action="../controle/loginControle.php"  method="post">
            <table>
                <tr>
                    <th><p><label for="usuario">Usuario:</label></p></th>
                    <td><input type="text" name="usuario" id="usuario" autocomplete="off"></td>
                </tr>
                <tr>
                    <th><p><label for="senha">Senha:</label></p></th>
                    <td><input type="password" name="senha" id="senha" autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="2"><p class="submit"><input type="submit" value="Enviar"></p></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
