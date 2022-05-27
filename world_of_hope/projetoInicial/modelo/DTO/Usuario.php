<?php
//Usuario.php
class UsuarioDTO{
    private $idUsuario;
    private $nome;
    private $tipoUsuario;
    private $cpfCnpj;
    private $endereco;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $loginEmail;
    private $senha;
    private $bio;
    private $tel;
    private $interesses;
    private $razao;
    private $atuacao;


    public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}

	public function setTipoUsuario($tipoUsuario){
		$this->tipoUsuario = $tipoUsuario;
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

	public function getLoginEmail(){
		return $this->loginEmail;
	}

	public function setLoginEmail($loginEmail){
		$this->loginEmail = $loginEmail;
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

	public function getTel(){
		return $this->tel;
	}

	public function setTel($tel){
		$this->tel = $tel;
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
}

?>