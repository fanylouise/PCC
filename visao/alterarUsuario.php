<!DOCTYPE html>
<!--alterarUsuario.php-->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <h1>Alterar</h1>
    <?php
        require_once "../modelo/DAO/UsuarioDAO.php";
        $usuarioDAO = new UsuarioDAO();
        $id = $_GET["id"];//recuperando ID atraves do get
        $usuario = $usuarioDAO->recuperarPorID($id);
    ?>
    <div class="formulario">
        <div>
            <?php
                if(isset($_GET["msg"])){
                    echo $_GET["msg"];
                }
            ?>
        </div>        
        
        <form action="../controle/alterarUsuarioControler.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <table>
                <tr>
                    <th><p><label for="nome">Nome:</label></p></th>
                    <td><input type="text" name="nome" value="<?=$usuario["nome"]?>"
                    id="nome" autocomplete="off"></td>
                </tr>
 
                <tr>
                    <th><p><label for="perfil">Perfil:</label></p></th>
                    <td><input type="text" name="perfil" value="<?=$usuario["perfil_usuario"]?>"
                    id="perfil" autocomplete="off"></td>
                </tr>
               
                <tr>
                <th><p><label for="email">Email:</label></p></th>
                    <td><input type="text" name="email" value="<?=$usuario["email"]?>"
                    id="email" autocomplete="off"></td>
            </tr>    
                <tr>    
                    <th><p><label for="endereco">Endereco:</label></p></th>
                    <td><input type="text" name="endereco" value="<?=$usuario["endereco"]?>"
                    id="endereco" autocomplete="off"></td>
            </tr> 
                 <tr>   
                    <th><p><label for="telefone">Telefone:</label></p></th>
                    <td><input type="text" name="telefone" value="<?=$usuario["telefone"]?>"
                    id="telefone" autocomplete="off"></td>
                </tr> 
                <tr>   
                    <th><p><label for="uf">Uf:</label></p></th>
                    <td><input type="text" name="uf" value="<?=$usuario["uf"]?>"
                    id="uf" autocomplete="off"></td>
                </tr> 
                <tr>   
                    <th><p><label for="bio">Bio:</label></p></th>
                    <td><input type="text" name="bio" value="<?=$usuario["bio"]?>"
                    id="bio" autocomplete="off"></td>
                </tr> 
                <tr>   
                    <th><p><label for="atuacao">Atuacao:</label></p></th>
                    <td><input type="text" name="atuacao" value="<?=$usuario["atuacao"]?>"
                    id="atuacao" autocomplete="off"></td>
                </tr> 
                
                <tr>
                    <td colspan="2"><p class="submit"><input type="submit" value="Enviar"></p></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
