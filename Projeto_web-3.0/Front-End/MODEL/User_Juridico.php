<?php


class JURIDICO{

private $id;    
private $razao_social;
private $nfantasia;
private $cnpj;
private $ie;
private $ramo;


function getId() {
    return $this->id;
}

function setId($id) {
    $this->id = $id;
}

	public function getRazao_social(){
		return $this->razao_social;
	}

	public function setRazao_social($razao_social){
		$this->razao_social = $razao_social;
	}

	public function getNfantasia(){
		return $this->nfantasia;
	}

	public function setNfantasia($nfantasia){
		$this->nfantasia = $nfantasia;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	public function getIe(){
		return $this->ie;
	}

	public function setIe($ie){
		$this->ie = $ie;
	}


	public function getRamo(){
		return $this->ramo;
	}

	public function setRamo($ramo){
		$this->ramo = $ramo;
	}

}





?>