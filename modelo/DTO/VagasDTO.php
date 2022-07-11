<?php
//Vagas.php
class VagasDTO{
    private $idVaga;
    private $titulo;
    private $endereco;
    private $uf;
    private $atuacao;
    private $descricao;
	private $telefone;
    private $email;
	private $idusuario;
		private $data;

		public function __construct($idusuario,$titulo,$descricao,$data)
		{
			$this->idusuario=$idusuario;
			$this->titulo=$titulo;
			$this->descricao=$descricao;
			$this->data=$data;
		}

    public function getIdVaga(){
		return $this->idVaga;
	}

	public function setIdVaga($idVaga){
		$this->idVaga = $idVaga;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTiulo($titulo){
		$this->titulo = $titulo;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getUf(){
		return $this->uf;
	}

	public function setUf($uf){
		$this->uf = $uf;
	}

	public function getAtuacao(){
		return $this->atuacao;
	}

	public function setAtuacao($atuacao){
		$this->atuacao = $atuacao;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}


		public function getIdusuario()
		{
				return $this->idusuario;
		}

		public function setIdusuario($idusuario)
		{
				$this->idusuario = $idusuario;
		}

		public function getData()
		{
				return $this->data;
		}

		public function setData($data)
		{
				$this->data = $data;
		}
}