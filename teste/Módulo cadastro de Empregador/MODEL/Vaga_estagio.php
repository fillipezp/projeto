<?php
class vaga_estagio extends Vaga{
	
private $id_estagio;
private $poss_efetivo;
private $disp_turno;

	public function getId_estagio(){
		return $this->id_estagio;
	}

	public function setId_estagio($id_estagio){
		$this->id_estagio = $id_estagio;
	}

	public function getPoss_efetivo(){
		return $this->poss_efetivo;
	}

	public function setPoss_efetivo($poss_efetivo){
		$this->poss_efetivo = $poss_efetivo;
	}

	public function getDisp_turno(){
		return $this->disp_turno;
	}

	public function setDisp_turno($disp_turno){
		$this->disp_turno = $disp_turno;
	}
}


?>