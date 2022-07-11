<?php
//registrarDepoimentoControler.php
session_start();
require_once "../modelo/DTO/DepoimentoDTO.php";
require_once "../modelo/DAO/DepoimentoDAO.php";

// date_default_timezone_set('America/Sao_Paulo');
// $data = date('Y-m-d');

// session_start();

$nome         = $_POST["nome"];
$avaliacao    = $_POST["avaliacao"];
$depoimento   = $_POST["depoimento"];
$iddepoimento = 0;
$depoimento   = new DepoimentoDTO( $iddepoimento,$depoimento,$avaliacao,$nome, );
$depoimento->setIddepoimento( $iddepoimento );
$depoimento->setNome( $nome );
$depoimento->setAvaliacao( $avaliacao );
$depoimento->setIdusuario( $_SESSION["id"] );

echo " idusuario" . $_SESSION["id"] . "iddepoimento: " . $depoimento->getIddepoimento() . "<br>nome: " . $depoimento->getNome() . "<br>avaliação: " . $depoimento->getAvaliacao() . "<br>Depoimento: " . $depoimento->getDepoimento();

$depoimentoConn = new DepoimentoDAO();
$retorno        = $depoimentoConn->registrar( $depoimento );
// die();
if ( $retorno == null || $retorno == 0 ) {
    //redirecionar para o formulário quando houver erro
    header( "location:../visao/depoimento.php?msg=Erro ao cadastrar" );
} else {
    header( "location:../visao/depoimento.php?msg=Depoimento cadastrado" );
}

?>