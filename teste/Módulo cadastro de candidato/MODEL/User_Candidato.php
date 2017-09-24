<?php


class candidato  {
	
private $nome_completo;
private $sexo;
private $estado_civil;
private $dt_nascimento;
private $rg;
private $dt_exp;
private $cpf;
private $og_exped_uf;	

	public function getNome_completo(){
		return $this->nome_completo;
	}

	public function setNome_completo($nome_completo){
		$this->nome_completo = $nome_completo;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function getEstado_civil(){
		return $this->estado_civil;
	}

	public function setEstado_civil($estado_civil){
		$this->estado_civil = $estado_civil;
	}

	public function getDt_nascimento(){
		return $this->dt_nascimento;
	}

	public function setDt_nascimento($dt_nascimento){
		$this->dt_nascimento = $dt_nascimento;
	}

	public function getRg(){
		return $this->rg;
	}

	public function setRg($rg){
		$this->rg = $rg;
	}

	public function getDt_exp(){
		return $this->dt_exp;
	}

	public function setDt_exp($dt_exp){
		$this->dt_exp = $dt_exp;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getOg_exped_uf(){
		return $this->og_exped_uf;
	}

	public function setOg_exped_uf($og_exped_uf){
		$this->og_exped_uf = $og_exped_uf;
	}
	
}  




















?>