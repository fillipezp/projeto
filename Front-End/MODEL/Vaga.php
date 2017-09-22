<?php
class vaga {
	
private $id;
private $n_vagas;
private $horario;
private $c_hora;
private $remun;
private $atividades;
private $beneficios;
private $cargo;	

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getN_vagas(){
		return $this->n_vagas;
	}

	public function setN_vagas($n_vagas){
		$this->n_vagas = $n_vagas;
	}

	public function getHorario(){
		return $this->horario;
	}

	public function setHorario($horario){
		$this->horario = $horario;
	}

	public function getC_hora(){
		return $this->c_hora;
	}

	public function setC_hora($c_hora){
		$this->c_hora = $c_hora;
	}

	public function getRemun(){
		return $this->remun;
	}

	public function setRemun($remun){
		$this->remun = $remun;
	}

	public function getAtividades(){
		return $this->atividades;
	}

	public function setAtividades($atividades){
		$this->atividades = $atividades;
	}

	public function getBeneficios(){
		return $this->beneficios;
	}

	public function setBeneficios($beneficios){
		$this->beneficios = $beneficios;
	}

	function getCargo() {
            return $this->cargo;
        }

        function setCargo($cargo) {
            $this->cargo = $cargo;
        }


}


?>