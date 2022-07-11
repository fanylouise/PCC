<?php
//Depoimento.php
class DepoimentoDTO
{
  private $idusuario;
  private $iddepoimento;
  private $nome;
  private $avaliacao;
  private $depoimento;
  private $data;


  public function __construct($idusuario, $depoimento, $avaliacao)
  {
    $this->idusuario = $idusuario;
    $this->depoimento = $depoimento;
    $this->avaliacao = $avaliacao;
  }


  public function getIdusuario()
  {
    return $this->idusuario;
  }

  public function setIdusuario($idusuario)
  {
    $this->idusuario = $idusuario;
  }

  public function getIddepoimento()
  {
    return $this->iddepoimento;
  }

  public function setIddepoimento($iddepoimento)
  {
    $this->iddepoimento = $iddepoimento;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getAvaliacao()
  {
    return $this->avaliacao;
  }

  public function setAvaliacao($avaliacao)
  {
    $this->avaliacao = $avaliacao;
  }

  public function getDepoimento()
  {
    return $this->depoimento;
  }

  public function setDepoimento($depoimento)
  {
    $this->depoimento = $depoimento;
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
