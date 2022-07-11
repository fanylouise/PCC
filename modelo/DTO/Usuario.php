<?php
//Usuario.php
class UsuarioDTO{
    private $idUsuario;
    private $nome;
    private $perfilUsuario;
    private $email;
	private $senha;
	private $telefone;
	private $endereco;
	private $cep;
	private $uf;
	private $data_nasc;
	private $bio;
	private $cpfCnpj;
    private $razao;
    private $interesses;
    private $atuacao;

	public function __construct($nome,$email,$senha){
		$this->nome=$nome;
		$this->email=$email;
		$this->senha=$senha;
	}

    public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdusuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}


	public function getCpfCnpj(){
		return $this->cpfCnpj;
	}

	public function setCpfCnpj($cpfCnpj){
		$this->cpfCnpj = $cpfCnpj;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getUf(){
		return $this->uf;
	}

	public function setUf($uf){
		$this->uf = $uf;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getBio(){
		return $this->bio;
	}

	public function setBio($bio){
		$this->bio = $bio;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getInteresses(){
		return $this->interesses;
	}

	public function setInteresses($interesses){
		$this->interesses = $interesses;
	}

	public function getRazao(){
		return $this->razao;
	}

	public function setRazao($razao){
		$this->razao = $razao;
	}

	public function getAtuacao(){
		return $this->atuacao;
	}

	public function setAtuacao($atuacao){
		$this->atuacao = $atuacao;
	}

    /**
     * Get the value of perfilUsuario
     */ 
    public function getPerfilUsuario()
    {
        return $this->perfilUsuario;
    }

    /**
     * Set the value of perfilUsuario
     *
     * @return  self
     */ 
    public function setPerfilUsuario($perfilUsuario)
    {
        $this->perfilUsuario = $perfilUsuario;

        return $this;
    }

	/**
	 * Get the value of data_nasc
	 */ 
	public function getData_nasc()
	{
		return $this->data_nasc;
	}

	/**
	 * Set the value of data_nasc
	 *
	 * @return  self
	 */ 
	public function setData_nasc($data_nasc)
	{
		$this->data_nasc = $data_nasc;

		return $this;
	}
}

?>