<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<?php
    require_once "../modelo/DAO/UsuarioDAO.php";
    $usuarioDAO = new UsuarioDAO();
    $id = $_GET["id"];
    $usuario = $usuarioDAO->recuperarPorID($id);
?>

<body>
    <h1>Alterar Usuário</h1>
    <div class="formulario">
        <form action="../controle/alterarUsuarioControler.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" id="id" value="<?=$usuario["idusuario"]?>" autocomplete="off"></td>
                    <th>
                        <p><label for="nome">Nome:</label></p>
                    </th>
                    <td>
                        <input type="text" name="nome" id="nome" value="<?=$usuario["nome"]?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <th>
                        <p><label for="usuario">Usuario:</label></p>
                    </th>
                    <td><input type="text" name="usuario" value="<?=$usuario["login"]?>" id="usuario"
                            autocomplete="off"></td>
                </tr>
                <tr>
                    <th>
                        <p><label for="email">Perfil:</label></p>
                    </th>
                    <td><input type="text" name="perfil" value="<?=$usuario["perfil"]?>" id="email" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="submit"><input type="submit" value="Enviar"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>