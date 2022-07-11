<?php
//alterarUsuarioControler.php
require_once "../modelo/DAO/UsuarioDAO.php";
require_once "../modelo/DTO/Usuario.php";

$idusuario = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$uf = $_POST["uf"];
$atuacao = isset($_POST["atuacao"]) ? $_POST["atuacao"] : 'null';
$bio = $_POST["bio"];





$usuario = new UsuarioDTO($nome, $email, "");
$usuario->setEndereco($endereco);
$usuario->setUf($uf);
$usuario->setAtuacao($atuacao);
$usuario->setTelefone($telefone);
$usuario->setIdUsuario($idusuario);
$usuario->setBio($bio);


$usuarioConn = new UsuarioDAO();
$retorno = $usuarioConn->alterar($usuario);


if($retorno == null || $retorno == 0) {
    //redirecionar para o formulário quando houver erro
    header("location:../visao/administrador.php?idvaga=$idusuario&msg=Erro ao alterar vaga!");
} else {
    header("location:../visao/administrador.php?msg=Usuário Alterado com sucesso!");
}