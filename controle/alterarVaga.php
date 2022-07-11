<?php
//alterarVagaControler.php
require_once "../modelo/DAO/VagasDAO.php";
require_once "../modelo/DTO/VagasDTO.php";

$idvaga = $_POST["idvaga"];
$titulo = $_POST["titulo"];
$endereco = $_POST["endereco"];
$uf = $_POST["uf"];
$atuacao = isset($_POST["atuacao"]) ? $_POST["atuacao"] : 'null';
$descricao = $_POST["descricao"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

$vaga = new VagasDTO("",$titulo,$descricao,"");
$vaga->setEndereco($endereco);
$vaga->setUf("df");
$vaga->setAtuacao($atuacao);
$vaga->setEmail($email);
$vaga->setTelefone($telefone);
$vaga->setIdVaga($idvaga);

echo "idusuario: ".$vaga->getIdusuario()."<br>titulo: ".$vaga->getTitulo()."<br>descricao: ".$vaga->getDescricao()."<br>data: ".$vaga->getData()."<br>endereco: ".$vaga->getEndereco()."<br>uf: ".$vaga->getUf()."<br>atuacao: ".$vaga->getAtuacao()."<br>email: ".$vaga->getEmail()."<br>telefone: ".$vaga->getTelefone();


$vagaConn = new VagasDAO();
$retorno = $vagaConn->alterar($vaga);

if($retorno == null || $retorno == 0) {
    //redirecionar para o formulário quando houver erro
    header("location:../visao/alterar_vaga.php?idvaga=$idvaga&msg=Erro ao alterar vaga!");
} else {
    header("location:../visao/pg_inicial_ong.php?msg=Vaga Alterada com sucesso!");
}