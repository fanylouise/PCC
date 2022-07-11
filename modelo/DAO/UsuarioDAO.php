<?php
//UsuarioDAO.php
require_once "Conexao.php";

class UsuarioDAO{
    //metodo para  verificar login no banco
    public function logar($usuario){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados   
            $sql = "SELECT * FROM usuario where  senha=?  and email=?";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1, $usuario->getSenha());//associa o valor senha a 1a interrogação
            $stmt->bindValue(2, $usuario->getEmail());//associa o valor email a 2a interrogação?
            $stmt->execute();//executa comando sql
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);

            return $usuarioFetch;

        }catch(PDOException $e){
           echo $e->getMessage();
           die();
        }//fim do try
    }//fim do metodo logar
    //metodo listar usuarios    
    public function listarUsuarios($filtro){
        try{
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");   
            $sql = "SELECT * FROM usuario";
            $stmt = $con->prepare($sql);//prepara sql a ser executada
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo listar usuarios
   //metodo registrar usuarios    
    //metodo listar usuarios    
    public function consultaUsuarios($filtro){
        try{
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");   
            $sql = "SELECT * FROM usuario where interesses like ?";
            $stmt = $con->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1, "%".$filtro."%");
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo listar usuarios
   //metodo registrar usuarios    
    public function registrar($nome,$perfil_usuario,$email,$senha,$telefone,$endereco,$cep,$uf,$data_nasc,$bio,$cpfCnpj,$razao,$interesses,$atuacao){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados 
            $sql = "INSERT INTO usuario(nome, perfil_usuario, email, senha, telefone, endereco, cep, uf, data_nasc, bio, cpfCnpj, razao, interesses, atuacao) 
            values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $perfil_usuario);
            $stmt->bindValue(3, $email);
            $stmt->bindValue(4, $senha);
            $stmt->bindValue(5, $telefone);
            $stmt->bindValue(6, $endereco);
            $stmt->bindValue(7, $cep);
            $stmt->bindValue(8, $uf);
            $stmt->bindValue(9, $data_nasc);
            $stmt->bindValue(10, $bio);
            $stmt->bindValue(11, $cpfCnpj);
            $stmt->bindValue(12, $razao);
            $stmt->bindValue(13, $interesses);
            $stmt->bindValue(14, $atuacao);
            $retorno = $stmt->execute();
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo registrar 
    
    //metodo para  deletar usuario pela chave primária (idusuario)
    public function deleteUsuarioPorID($id){
        try{
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");   
            $sql = "DELETE  FROM usuario where idusuario=? ";
            $stmt = $con->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$id);//associa o valor senha a 1a interrogação
            $retorno =$stmt->execute();//executa comando sql
            return $retorno;
        }catch(PDOException $e){
            echo $e->getMessage();
        }//fim do try
    }//fim do metodo deleteUsuarioPorID
    public function recuperarPorID($id){
        try{
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");   
            $sql = "SELECT * FROM usuario where idusuario=? ";
            $stmt = $con->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$id);//associa o valor id a 1a interrogação
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo logar

       //metodo registrar usuarios    
       public function alterar(UsuarioDTO $usuario){
        try{
            $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");   
            $sql = "UPDATE usuario SET nome=?, /*perfil=?,*/ email=?, telefone=?, endereco=?, uf=?, bio=?, atuacao=?
                       where idusuario=?";
            $stmt = $con->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$usuario->getNome () );
            // $stmt->bindValue(2,$usuario->getPerfilUsuario() ); 
            $stmt->bindValue(2,$usuario->getEmail() );
            $stmt->bindValue(3,$usuario->getTelefone());
            $stmt->bindValue(4,$usuario->getEndereco());
            $stmt->bindValue(5,$usuario->getUf());
            $stmt->bindValue(6,$usuario->getBio());
            $stmt->bindValue(7,$usuario->getAtuacao());
            $stmt->bindValue(8,$usuario->getIdUsuario());

            $retorno = $stmt->execute();
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo alterar usuario



 //metodo listar usuarios    
 public function consultarUsuarios($filtro){
    try{
        $con = new PDO('mysql:host=localhost;dbname=woh;charset=utf8',"root","");   
        $sql = "SELECT * FROM usuario where nome like ?";
        $stmt = $con->prepare($sql);//prepara sql a ser executada
        $stmt->bindValue(1, "%".$filtro."%");
        $stmt->execute();//executa comando sql
        $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $retorno;
    }catch(PDOException $e){
       echo $e->getMessage();
    }//fim do try
}//fim do metodo listar usuarios
}//fim da classe UsuarioDAO