<?php
require_once "../modelo/DAO/UsuarioDAO.php";
$id = $_GET["id"];
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->deleteUsuarioPorID($id);
if($retorno==null || empty($returno) ){
    header("location:../visao/lista_usuarios.php?msg=erro na exclusão");    
}else{
    header("location:../visao/lista_usuarios.php?msg=excluído com sucesso!"); 
}
