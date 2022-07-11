<?php
//deleteVagasControler.php
if(!isset($_GET["idvaga"])){
  header("location:../visao/pg_inicial_ong.php?msg=Nenhuma vaga selecionada!");
}
$idvaga = $_GET["idvaga"];
require_once "../modelo/DAO/VagasDAO.php";

echo "idvaga: $idvaga";


$vagaConn = new VagasDAO();
$retorno = $vagaConn->deleteVagasPorID($idvaga);

if($retorno == null || $retorno == 0){
  //Se o retorno for nulo ele apresenta msg de erro
  header("location:../visao/pg_inicial_ong.php?msg=Erro ao deletar vaga!");
}else{
  header("location:../visao/pg_inicial_ong.php?msg=Vaga deletada com sucesso!");   
}