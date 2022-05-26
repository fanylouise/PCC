<?php
//registrarUsuarioControler.php
require_once "../modelo/Usuario.php";
require_once "../modelo/DAO/UsuarioDAO.php";

$login = $_POST["usuario"];
$nome = $_POST["nome"];
$perfil = $_POST["perfil"];
$id = $_POST["id"];

$usuario= new Usuario($nome,$login,$senha);
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->alterar($usuario);

if($retorno == null || $retorno==0){
    //redirecionar para o formulário quando houver erro
    header("location:../visao/alteracaoUsuario.php?msg=erro ao alterar&id=$id");
}else{
    header("location:../visao/lista_usuarios.php?msg=Usuario Alterado");
}

