<?php
//deleteVagasControler.php
if(!isset($_GET["iddepoimento"])){
  header("location:../visao/depoimento.php?msg=Nenhum depoimento selecionado!");
}
$iddepoimento= $_GET["iddepoimento"];
require_once "../modelo/DAO/DepoimentoDAO.php";

echo "iddepoimento: $iddepoimento";


$depoimentoConn = new DepoimentoDAO();
$retorno = $depoimentoConn->deleteDepoimentoPorID($iddepoimento);


//alterar pra o depooimento
if($retorno == null || $retorno == 0){
  //Se o retorno for nulo ele apresenta msg de erro
  header("location:../visao/depoimento.php?msg=Erro ao deletar depoimento!");
}else{
  header("location:../visao/depoimento.php?msg=Depoimento deletado com sucesso!");   
}