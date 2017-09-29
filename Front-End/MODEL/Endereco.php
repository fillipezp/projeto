<?php


class ENDERECO {
	
private $logradouro;
private $numero;
private $complemento;
private $cep;
private $bairro;
private $estado;
private $cidade;
private $fk_empresa;
function getFk_empresa() {
    return $this->fk_empresa;
}

function setFk_empresa($fk_empresa) {
    $this->fk_empresa = $fk_empresa;
}


	public function getLogradouro(){
		return $this->logradouro;
	}

	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
}





?>