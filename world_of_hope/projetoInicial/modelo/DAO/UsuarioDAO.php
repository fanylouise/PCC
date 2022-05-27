<?php
//UsuarioDAO.php
require_once "../Conexao.php";
require_once"../DTO/Usuario.php";
class UsuarioDAO{
    //metodo para  verificar login no banco
    public function logar(UsuarioDTO $usuarioDTO){
        try{
            $conexao = Conexao::getInstance();    
            $sql = "SELECT * FROM usuario where email=? and senha=? ";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1, $usuarioDTO->getSenha());//associa o valor senha a 1a interrogação
            $stmt->bindValue(2, $usuarioDTO->getEmail());//associa o valor senha a 2a interrogação?
            $stmt->execute();//executa comando sql
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);

            if($usuarioFetch != NULL){
                $usuario = new UsuarioDTO();
                $usuario->setIdUsuario($usuarioFetch["idusuario"]);
                $usuario->setNome($usuarioFetch["nome"]);
                $usuario->setTipoUsuario($usuarioFetch["tipoUsuario"]);

                return $usuario;
            }
            return null;



















            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo logar
    //metodo listar usuarios    
    public function listarUsuarios($filtro){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados
            $sql = "SELECT * FROM usuario";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo listar usuarios
   //metodo registrar usuarios    
    public function registrar(Usuario $usuario){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados
            $sql = "INSERT INTO usuario(nome, login, senha, perfil) 
            values(?,?,?,?)";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$usuario->getNome () );
            $stmt->bindValue(2,$usuario->getLogin() );
            $stmt->bindValue(3,$usuario->getSenha() );
            $stmt->bindValue(4,$usuario->getPerfil());
            $retorno = $stmt->execute();
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo registrar 
    
    //metodo para  deletar usuario pela chave primária (idusuario)
    public function deleteUsuarioPorID($id){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados
            $sql = "DELETE  FROM usuario where idusuario=? ";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$id);//associa o valor senha a 1a interrogação
            $retorno =$stmt->execute();//executa comando sql
            return $retorno;
        }catch(PDOException $e){
            echo $e->getMessage();
        }//fim do try
    }//fim do metodo deleteUsuarioPorID
    public function recuperarPorID($id){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados
            $sql = "SELECT * FROM usuario where idusuario=? ";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$id);//associa o valor id a 1a interrogação
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo logar

       //metodo registrar usuarios    
       public function alterar(Usuario $usuario){
        try{
            $conexao = Conexao::getInstance();  //criando query para consultar no banco de dados
            $sql = "UPDATE usuario SET nome=?, login=?, perfil=? 
                       where idusuario=?";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$usuario->getNome () );
            $stmt->bindValue(2,$usuario->getLogin() );
            $stmt->bindValue(3,$usuario->getPerfil() );
            $stmt->bindValue(4,$usuario->getIdUsuario());
            $retorno = $stmt->execute();
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo alterar usuario
}//fim da classe UsuarioDAO