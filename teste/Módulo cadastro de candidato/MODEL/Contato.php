<?php
class Contato {
	
private $residencial;
private $celular;
private $linkedin;

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