<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuário</title>
    <link rel="stylesheet" href="../css/lista_usuarios.css">
     <!--Favicon-->
     <link rel="apple-touch-icon" sizes="180x180" href="../WOH/assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../WOH/assets/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../WOH/assets/logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <h1>Lista Usuários</h1>
    <div class="lista">
        <div>
            <?php
                if(isset($_GET["msg"])){
                    echo $_GET["msg"];
                }

            ?>
        </div>
        <form action="" method="post">
            <div class="consulta">
                <label for="consulta">Nome:</label>
                <input type="text" name="consulta" id="consulta" autocomplete="off">
                <input type="submit"  value="consultar">
            </div>

        </form>
    <?php


    ?>        
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
<?php
        require_once "../modelo/DAO/UsuarioDAO.php";
        $usuarioDao = new UsuarioDAO();
        $lista = $usuarioDao->listarUsuarios("");
        foreach($lista as $usuario){
?>
            <tr>
                <td><?=$usuario["idusuario"]?></td>
                <td><?=$usuario["nome"]?></td>
                <td><?=$usuario["email"]?></td>
                <td><?=$usuario["perfil_usuario"]?></td>
                <td>
                    <a href="alterarUsuario.php?id=<?=$usuario["idusuario"]?>">
                    Alterar</a>
                    <a href="../controle/deleteUsuarioControler.php?id=<?=$usuario["idusuario"]?>">Deletar</a>
                </td>
            </tr>
<?php
        }
?>            
        </table>
    </div>
</body>
</html>
