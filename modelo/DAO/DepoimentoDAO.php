<?php
//DepoimentoDAO.php
require_once "Conexao.php";

class DepoimentoDAO {
    public function listarDepoimentos() {
        try {
            $con  = new PDO( 'mysql:host=localhost;dbname=woh;charset=utf8', "root", "" );
            $sql  = "SELECT * FROM depoimento"; //mostra as vagas em ordem da mais recente para mais antiga
            $stmt = $con->prepare( $sql ); //prepara sql a ser executada
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $retorno;
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo listar depoimento

    // public function listarDepoimentoById($id)
    // {
    //     try {
    //         $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");
    //         $sql = "SELECT * FROM depoimento WHERE iddepoimento = ? ORDER BY data";
    //         $stmt = $con->prepare($sql); //prepara sql a ser executada
    //         $stmt->bindValue(1, $id); //associa o valor senha a 1a interrogação
    //         $stmt->execute(); //executa comando sql
    //         $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //         return $retorno;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //     } //fim do try
    // } //fim do metodo listar depoimento
    // //metodo registrar depoimento
    // //metodo listar depoimento
    public function consultaDepoimento( $filtro ) {
        try {
            $con  = new PDO( 'mysql:host=localhost;dbname=woh;charset=utf8', "root", "" );
            $sql  = "SELECT * FROM depoimento where avaliacao like ?";
            $stmt = $con->prepare( $sql ); //prepara sql a ser executada
            $stmt->bindValue( 1, "%" . $filtro . "%" );
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $retorno;
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo listar depoimentos
    //metodo registrar depoimento
    public function registrar( $depoimento ) {
        try {
            $conexao = new PDO( 'mysql:host=localhost;dbname=woh;charset=utf8', "root", "" ); //criando query para consultar no banco de dados
            $conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

            $sql = "INSERT INTO depoimento(depoimento,idusuario,estrelas,nome)
            values(?,?,?,?)";

            $stmt = $conexao->prepare( $sql ); //prepara sql a ser executada

            $stmt->bindValue( 1, $depoimento->getDepoimento() );
            $stmt->bindValue( 2, $depoimento->getIdusuario() );
            $stmt->bindValue( 3, $depoimento->getAvaliacao() );
             $stmt->bindValue( 4, $depoimento->getNome() );
            $retorno = $stmt->execute();

            return $retorno;

        } catch ( PDOException $e ) {
            echo "Erro ao executar inserção: " . $e->getMessage();
        } //fim do try
    } //fim do metodo registrar

    //metodo para  deletar vagas pela chave primária (iddepoimento)
    public function deleteDepoimentoPorID( $iddepoimento ) {
        try {
            $con  = new PDO( 'mysql:host=localhost;dbname=woh;charset=utf8', "root", "" );
            $sql  = "DELETE FROM depoimento WHERE id_depoimento=?";
            $stmt = $con->prepare( $sql ); //prepara sql a ser executada
            $stmt->bindValue( 1, $iddepoimento ); //associa o valor senha a 1a interrogação
            $retorno = $stmt->execute(); //executa comando sql
            return $retorno;
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo deleteDepoimentoPorID
    public function recuperarPorID( $id ) {
        try {
            $con  = new PDO( 'mysql:host=localhost;dbname=woh;charset=utf8', "root", "" );
            $sql  = "SELECT * FROM depoimento where iddepoimento=? ";
            $stmt = $con->prepare( $sql ); //prepara sql a ser executada
            $stmt->bindValue( 1, $id ); //associa o valor id a 1a interrogação
            $stmt->execute(); //executa comando sql
            $retorno = $stmt->fetch( PDO::FETCH_ASSOC );
            return $retorno;
        } catch ( PDOException $e ) {
            echo $e->getMessage();
        } //fim do try
    }

    //metodo registrar depoimento
    public function alterar(DepoimentoDTO $depoimento ) {
        try {
            $con = new PDO( 'mysql:host=localhost;dbname=woh;charset=utf8', "root", "" );

            $sql = "UPDATE depoimento SET nome=?, estrelas=?, depoimento=? WHERE id_depoimento=?";

            $stmt = $con->prepare( $sql ); //prepara sql a ser executada
            $stmt->bindValue( 1, $depoimento->getNome() );
            $stmt->bindValue( 2, $depoimento->getAvaliacao() );
            $stmt->bindValue( 3, $depoimento->getDepoimento() );
            $stmt->bindValue( 4, $depoimento->getIddepoimento() );
            $retorno = $stmt->execute();

            return $retorno;

        } catch ( PDOException $e ) {
            echo $e->getMessage();
        } //fim do try
    } //fim do metodo alterar depoimento
} //fim da classe DepoimentoDAO