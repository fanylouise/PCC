<?php
//deleteUsuarioControler.php
$id = $_GET["id"];
require_once "../modelo/DAO/UsuarioDAO.php";
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->deleteUsuarioPorID($id);

if($retorno=="1"){
  header("location:../visao/lista_usuarios.php?msg=Usuário Deletado");
}else{
  header("location:../visao/lista_usuarios.php?msg=Erro ao Deletar");   
}