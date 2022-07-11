<?php
//alterarDepoimentoControler.php
require_once "../modelo/DAO/DepoimentoDAO.php";
require_once "../modelo/DTO/DepoimentoDTO.php";

$iddepoimento = $_POST["iddepoimento"];
$nome = $_POST["nome"];
$avaliacao = isset($_POST["avaliacao"]) ? $_POST["avaliacao"] : 5;
$depoimento = $_POST["depoimento"];

$depoimento = new DepoimentoDTO("",$depoimento,$avaliacao);
$depoimento->setNome($nome);
$depoimento->setIddepoimento($iddepoimento);

//echo "iddepoimento: ".$depoimento->getIddepoimento()."<br>Nome: ".$depoimento->getNome()."<br>avaliação: ".$depoimento->getAvaliacao()."<br>depoimento: ".$depoimento->getDepoimento();


$depoimentoConn = new DepoimentoDAO();
$retorno = $depoimentoConn->alterar($depoimento);


//modificar para o depoimento
if($retorno == null || $retorno == 0) {
    //redirecionar para o formulário quando houver erro
    header("location:../visao/depoimento.php?iddepoimento=$iddepoimento&msg=Erro ao alterar depoimento!");
} else {
    header("location:../visao/depoimento.php?msg=Depoimento Alterado com sucesso!");
}