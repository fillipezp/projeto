<?php
class formacao {
	
private $nvl_ensino;
private $instituicao;
private $curso;
private $conclusao;
	
	public function getNvl_ensino(){
		return $this->nvl_ensino;
	}

	public function setNvl_ensino($nvl_ensino){
		$this->nvl_ensino = $nvl_ensino;
	}

	public function getInstituicao(){
		return $this->instituicao;
	}

	public function setInstituicao($instituicao){
		$this->instituicao = $instituicao;
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setCurso($curso){
		$this->curso = $curso;
	}

	public function getConclusao(){
		return $this->conclusao;
	}

	public function setConclusao($conclusao){
		$this->conclusao = $conclusao;
	}
	
	
}


?>