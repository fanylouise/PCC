<?php
//registrarVagaControler.php
session_start();
require_once "../modelo/DTO/VagasDTO.php";
require_once "../modelo/DAO/VagasDAO.php";

date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');

$idusuario = $_SESSION["id"];
$titulo = $_POST["titulo"];
$endereco = $_POST["endereco"];
$uf = $_POST["uf"];
$atuacao = isset($_POST["atuacao"]) ? $_POST["atuacao"] : 'null';
$descricao = $_POST["descricao"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];



$vaga = new VagasDTO($idusuario,$titulo,$descricao,$data);
$vaga->setEndereco($endereco);
$vaga->setUf($uf);
$vaga->setAtuacao($atuacao);
$vaga->setEmail($email);
$vaga->setTelefone($telefone);

echo "idusuario: ".$vaga->getIdusuario()."<br>titulo: ".$vaga->getTitulo()."<br>descricao: ".$vaga->getDescricao()."<br>data: ".$vaga->getData()."<br>endereco: ".$vaga->getEndereco()."<br>uf: ".$vaga->getUf()."<br>atuacao: ".$vaga->getAtuacao()."<br>email: ".$vaga->getEmail()."<br>telefone: ".$vaga->getTelefone();


$vagaConn = new VagasDAO();
$retorno = $vagaConn->registrar($vaga);

if($retorno == null || $retorno == 0){
    //redirecionar para o formulário quando houver erro
    header("location:../visao/cad_vaga.php?msg=erro ao cadastrar");
}else{
    header("location:../visao/pg_inicial.ong.php?msg=Vaga cadastrada");
}
?>