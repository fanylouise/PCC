<?php
//registrarUsuarioControler.php
require_once "../modelo/DTO/Usuario.php";
require_once "../modelo/DAO/UsuarioDAO.php";

$nome = $_POST["nome"];
$perfil = $_POST["perfil"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$uf = $_POST["uf"];
$data_nasc = $_POST["data_nasc"];
$bio = $_POST["bio"];
$cpfCnpj = $_POST["cpfCnpj"];
$razao = isset($_POST["razao"]) ? $_POST["razao"] : 'null';
$interesses = isset($_POST["interesses[]"]) ? $_POST["interesses[]"] : 'null';
$atuacao = isset($_POST["atuacao"]) ? $_POST["atuacao"] : 'null';

//echo "nome: $nome<br>perfil $perfil<br>email $email<br>senha $senha<br>telefone $telefone<br>endereco: $endereco<br>cep $cep<br>uf $uf<br>data nascimento $data_nasc<br>bio $bio<br>cpf_cnpj $cpfCnpj<br>razao $razao<br>interesses $interesses<br>atuacao $atuacao";


//$usuario = new UsuarioDTO($nome,$perfil,$email,$senha,$telefone,$endereco,$cep,$uf,$data_nasc,$bio,$cpfCnpj,$razao,$interesses,$atuacao  );
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->registrar($nome,$perfil,$email,$senha,$telefone,$endereco,$cep,$uf,$data_nasc,$bio,$cpfCnpj,$razao,$interesses,$atuacao);

if($retorno == null || $retorno==0){
    //redirecionar para o formulário quando houver erro
    header("location:../visao/cad_voluntario.php?msg=erro ao cadastrar");
}else{
    header("location:../index.php?msg=Usuario cadastrado");
}