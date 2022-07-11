<?php
//loginControle.php
require_once "../modelo/DTO/Usuario.php";
require_once "../modelo/DAO/UsuarioDAO.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

//echo "e-mail: $email<br>senha: $senha";

$usuarioDTO = new UsuarioDTO("",$email,$senha);

//echo "<hr>e-mail: ".$usuarioDTO->getEmail()."<br>senha: ".$usuarioDTO->getSenha();

$usuarioDAO = new UsuarioDAO();
$usuarioLogado=$usuarioDAO->logar($usuarioDTO);


if($usuarioLogado == null || $usuarioLogado == 0){
    header("location:../visao/login.php?msg='usuário e/ou senha inválidos' ");
}else{
    session_start();
    $_SESSION["id"]=$usuarioLogado["idusuario"];
    $_SESSION["login"]=$usuarioLogado["email"];
    $_SESSION["perfil_usuario"]=$usuarioLogado["perfil_usuario"];
    $_SESSION["nome"]=$usuarioLogado["nome"];
    
switch($_SESSION["perfil_usuario"]){

    case 'ong':
        header("location:../visao/pg_inicial_ong.php");
        break;

    case 'vol':
        header("location:../visao/pg_inicial_voluntario.php");
        break;

    case 'adm':
        header("location:../visao/administrador.php");
        break;

}

}

//echo "<hr>sessao id: ".$_SESSION["id"]."<br>sessao login: ".$_SESSION["login"]."<br>sessao perfil: ".$_SESSION["perfil_usuario"]."<br>sessao nome: ".$_SESSION["nome"];

