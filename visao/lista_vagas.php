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
    <h1>Lista Vagas</h1>
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
                <label for="consulta">Título:</label>
                <input type="text" name="consulta" id="consulta" autocomplete="off">
                <input type="submit" value="consultar">
            </div>

        </form>
        <?php


    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Endereço</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Atuação</th>
                <th>Descrição</th>
                <th>Email</th>
                <th>Descrição</th>
            </tr>
            <?php
        require_once "../modelo/DAO/VagasDAO.php";
        $vagaDAO = new UsuarioDAO();
        $lista = $vagaDao->listarUsuarios("");
        foreach($lista as $vagas){
?>
            <tr>
                <td><?=$vagas["id_vaga"]?></td>
                <td><?=$vagas["titulo"]?></td>
                <td><?=$vagas["endereco"]?></td>
                <td><?=$vagas["area_atuacao"]?></td>
                <td><?=$vagas["email"]?></td>
                <td><?=$vagas["descricao"]?></td>
                <td>
                    <a href="alterarVaga.php?id=<?=$vagas["id_vaga"]?>">
                        Alterar</a>
                    <a href="../controle/deleteVagaControler.php?id=<?=$vagas["id_vaga"]?>">Deletar</a>
                </td>
            </tr>
            <?php
        }
?>
        </table>
    </div>
</body>

</html>