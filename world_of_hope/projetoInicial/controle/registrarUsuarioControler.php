<?php
//registrarUsuarioControler.php
require_once "../modelo/Usuario.php";
require_once "../modelo/DAO/UsuarioDAO.php";

$login = $_POST["usuario"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$perfil = $_POST["perfil"];

$usuario= new Usuario($nome,$login,$senha);
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->registrar($usuario);
if($retorno == null || $retorno==0){
    //redirecionar para o formulário quando houver erro
    header("location:../visao/registrar.php?msg=erro ao cadastrar");
}else{
    header("location:../visao/lista_usuarios.php?msg=Usuario cadastrado");
}

