<?php
//UsuarioDAO.php
require_once "Conexao.php";

class VagasDAO
{
    public function listarVagas()
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8', "root", "");
            $sql = "SELECT * FROM vagas ORDER BY id_vaga DESC";//mostra as vagas em ordem da mais recente para mais antiga
            $stmt = $con->prepare($sql); //prepara sql a ser executada
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo listar usuari

    public function listarVagasById($id)
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");
            $sql = "SELECT * FROM vagas WHERE id_vaga = ?";
            $stmt = $con->prepare($sql); //prepara sql a ser executada
            $stmt->bindValue(1, $id); //associa o valor senha a 1a interrogação
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo listar usuarios
    //metodo registrar usuarios    
    //metodo listar usuarios    
    public function consultaVagas($filtro)
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8', "root", "");
            $sql = "SELECT * FROM vagas where descrcao like ?";
            $stmt = $con->prepare($sql); //prepara sql a ser executada
            $stmt->bindValue(1, "%" . $filtro . "%");
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo listar usuarios
    //metodo registrar usuarios    
    public function registrar($vaga)
    {
        try {
            $conexao = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");  //criando query para consultar no banco de dados 
            
            $sql = "INSERT INTO vagas(idusuario,titulo,endereco,uf,atuacao,descricao,email,telefone,dataCadastro) values(?,?,?,?,?,?,?,?,?)";

            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$vaga->getIdusuario());
            $stmt->bindValue(2,$vaga->getTitulo());
            $stmt->bindValue(3,$vaga->getEndereco());
            $stmt->bindValue(4,$vaga->getUf());
            $stmt->bindValue(5,$vaga->getAtuacao());
            $stmt->bindValue(6,$vaga->getDescricao());
            $stmt->bindValue(7,$vaga->getEmail());
            $stmt->bindValue(8,$vaga->getTelefone());
            $stmt->bindValue(9,$vaga->getData());

            $retorno = $stmt->execute();

            return $retorno;

        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo registrar 

    //metodo para  deletar vagas pela chave primária (id_vaga)
    public function deleteVagasPorID($idvaga)
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8', "root", "");
            $sql = "DELETE FROM vagas WHERE id_vaga=?";
            $stmt = $con->prepare($sql); //prepara sql a ser executada
            $stmt->bindValue(1, $idvaga); //associa o valor senha a 1a interrogação
            $retorno = $stmt->execute(); //executa comando sql
            return $retorno;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo deleteVagaPorID
    public function recuperarPorID($id)
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8', "root", "");
            $sql = "SELECT * FROM vagas where id_vaga=? ";
            $stmt = $con->prepare($sql); //prepara sql a ser executada
            $stmt->bindValue(1, $id); //associa o valor id a 1a interrogação
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo logar

    //metodo registrar vagas  
    public function alterar($vagas)
    {
        try {
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8', "root", "");

            $sql = "UPDATE vagas SET titulo=?,descricao=?,endereco=?,uf=?,email=?,telefone=?,atuacao=? WHERE id_vaga=?";

            $stmt = $con->prepare($sql); //prepara sql a ser executada
            $stmt->bindValue(1, $vagas->getTitulo());
            $stmt->bindValue(2, $vagas->getDescricao());
            $stmt->bindValue(3, $vagas->getEndereco());
            $stmt->bindValue(4, $vagas->getUf());
            $stmt->bindValue(5, $vagas->getEmail());
            $stmt->bindValue(6, $vagas->getTelefone());
            $stmt->bindValue(7, $vagas->getAtuacao());
            $stmt->bindValue(8, $vagas->getIdvaga());
            $retorno = $stmt->execute();

            return $retorno;

        } catch (PDOException $e) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo alterar usuario
}//fim da classe VagasDAO