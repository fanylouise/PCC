<?php
//loginControle.php
require_once "../modelo/Usuario.php";
require_once "../modelo/DAO/UsuarioDAO.php";

$email = $_POST["email"];
$senha = $_POST["senha"];


$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setLoginEmail($email);
$usuarioDTO->setSenha($senha);


$usuarioDAO=new UsuarioDAO();
$usuarioLogado=$usuarioDAO->logar($usuarioDTO);


if($usuarioLogado!=null){
    session_start();
    $_SESSION["login"]=$usuarioLogado->getEmail();
    $_SESSION["tipo"]=$usuarioLogado->getTipoUsuario();
    header("location:../view/pg_inicial-ong.html");///como diferenciar os usuários para cair na sua página ex pg_inicial_ong ou pg_inicial_voluntario

}else{
    header("location:../view/entrar.html?msg='usuário e/ou senha inválidos' ");
}
    

