<?php
  include_once '../CONTROL/Obter_Vaga.php';
  include_once './ConexaoDao.php';
	
   class VagaDAO extends ConexaoDao {
        
	
      public function Insere(vaga $dados ){  
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $pdo->prepare('INSERT INTO VAGAS (n_vagas,horario,c_hora,remun,atividades,beneficios,cargo) VALUES(:n_vagas,:horario,:c_hora,:remun,:atividades,:beneficios,:cargo)');
  $stmt->execute(array(':n_vagas'        => $dados->getN_vagas(), 
                        ':horario'       => $dados->getHorario(),
                         ':c_hora'       => $dados->getC_hora(),  
                         ':remun'        => $dados->getRemun(), 
                         ':atividades'   => $dados->getAtividades(),
                         ':beneficios'   => $dados->getBeneficios(),
                         ':cargo'        => $dados->getCargo() ));  
  

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
}      
    } 
        
        
        
       
    
    
    
    
    
    
    
    
       
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
