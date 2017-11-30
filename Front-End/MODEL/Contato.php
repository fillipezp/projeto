<?php
class Contato {
	
private $residencial;
private $celular;
private $linkedin;
private $fk_empresa;
private $fk_candidato;


function getFk_empresa() {
    return $this->fk_empresa;
}

function getFk_candidato() {
    return $this->fk_candidato;
}

function setFk_empresa($fk_empresa) {
    $this->fk_empresa = $fk_empresa;
}

function setFk_candidato($fk_candidato) {
    $this->fk_candidato = $fk_candidato;
}




	public function getResidencial(){
		return $this->residencial;
	}

	public function setResidencial($residencial){
		$this->residencial = $residencial;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getLinkedin(){
		return $this->linkedin;
	}

	public function setLinkedin($linkedin){
		$this->linkedin = $linkedin;
	}	

}


?>