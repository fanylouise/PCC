<?php
//alterarUsuarioControler.php
require_once "../modelo/Usuario.php";
require_once "../modelo/DAO/UsuarioDAO.php";

$login = $_POST["usuario"];
$nome = $_POST["nome"];
$id = $_POST["id"];
$perfil = $_POST["perfil"];

$usuario= new Usuario($nome,$login,"");
$usuario->setIdUsuario($id);//seta o id do usuario
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->alterar($usuario);

if($retorno == null || $retorno==0){
    //redirecionar para o formulário quando houver erro
 header("location:../visao/alterar.php?id=$id&msg=erro ao Alterar");
}else{
 header("location:../visao/lista_usuarios.php?msg=Usuario Alterado");
}

