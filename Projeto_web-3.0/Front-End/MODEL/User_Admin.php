<?php
class Admin extends Usuario{
	
private $id_admin;

		public function getId_admin(){
		return $this->id_admin;
	}

	public function setId_admin($id_admin){
		$this->id_admin = $id_admin;
	}
	
}


?>