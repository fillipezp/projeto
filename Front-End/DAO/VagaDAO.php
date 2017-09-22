<?php
    require_once 'ConexaoDao.php';
    require_once '../CONTROL/Obter_Vaga';
   
	
   class VagaDAO extends ConexaoDao {
        
		
		// Retornar todos os candidatos cadastrados no site
        public function getAll() {
            $result = array();
            $stm = $this->conn->query('SELECT * FROM VAGAS ');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $VAGAS = new vaga();
                    $VAGAS->setNome_completo($row->nome_completo);
					$VAGAS->setId($row->id);
					$VAGAS->setN_vagas($row->nvagas);
					$VAGAS->setRemun($row->remun);
					$VAGAS->setAtividades($row->atividades);
					$VAGAS->setHorario($row->horario);
                    $result[] = $VAGAS;
                }
            }
            return $result;
		
        }
        
        
        
	
	
	
   }	
?>