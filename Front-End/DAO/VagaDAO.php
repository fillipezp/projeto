<?php
  /*
     include 'ConexaoDao.php';
     require_once  '../MODEL/Vaga.php';
    

  	
 class VagaDAO extends Connect {
        
    
 public function Insere(Vaga1 $dados, int $cnpj){  
  
     try { 
     $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO VAGAS (n_vagas,horario,c_hora,remun,atividades,beneficios,cargo,FK_JURIDICO_id_empresa) VALUES(:n_vagas,:horario,:c_hora,:remun,:atividades,:beneficios,:cargo,FK_JURIDICO_id_empresa)');
  $stmt->execute(array(':n_vagas'        => $dados->getN_vagas(), 
                        ':horario'       => $dados->getHorario(),
                         ':c_hora'       => $dados->getC_hora(),  
                         ':remun'        => $dados->getRemun(), 
                         ':atividades'   => $dados->getAtividades(),
                         ':beneficios'   => $dados->getBeneficios(),
                         ':cargo'        => $dados->getCargo(),
                         ':FK_JURIDICO_id_empresa' => $cnpj)); 
  

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
                    $VAGAS = new Vaga1();                   
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

 ?>    */