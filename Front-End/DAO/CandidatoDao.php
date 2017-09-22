<?php
    require_once 'ConexaoDao.php';
	require_once '../CONTROL/Obter_Candidato.php';
   
	
   class CandidatoDAO extends ConexaoDao {
        
		
		
		
		
		
		
		// Retornar todos os candidatos cadastrados no site
        public function getAll() {
            $result = array();
            $stm = $this->conn->query('SELECT * FROM CANDIDATO order by asc');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $CANDIDATO = new CANDIDATO();
                    $CANDIDATO->setNome_completo($row->nome_completo);
					$CANDIDATO->setSexo($row->sexo);
					$CANDIDATO->setEstado_civil($row->estado_civil);
					$CANDIDATO->setDt_nascimento($row->dt_nascimento);
					$CANDIDATO->setRg($row->rg);
					$CANDIDATO->setCpf($row->cpf);
                    $result[] = $CANDIDATO;
                }
            }
            return $result;
		
        }
		
		
		
		// Retorna todos os candidatos do sexo masculino
		
		 public function getALL_Names_Masculino() {
            $result = array();
            $stm = $this->conn->query('SELECT nome_completo FROM CANDIDATO  WHERE sexo like '%Masculino%'');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $CANDIDATO = new CANDIDATO();
                
                    $CANDIDATO->setNome_completo($row->nome_completo);
					$CANDIDATO->setCpf($row->cpf);
					
                    $result[] = $CANDIDATO;
                }
            }
            return $result;
		
        }
		
		
		
		
		
		
		
		//Retorna todos os candidatos do sexo feminino
		 public function getALL_Names_Feminino() {
            $result = array();
            $stm = $this->conn->query('SELECT nome_completo FROM CANDIDATO  WHERE sexo like '%Feminino%'');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $CANDIDATO = new CANDIDATO();
                
                    $CANDIDATO->setNome_completo($row->nome_completo);
					$CANDIDATO->setCpf($row->cpf);
					
                    $result[] = $CANDIDATO;
                }
            }
            return $result;
		
        }
		
		
		
		
		
		
		//Retorna um candidato por cpf
	public function Get_CPF(){
	$search = $_GET['cpf'];
          $sql = "SELECT * FROM CANDIDATO WHERE cpf LIKE '%" . $search . "%'";
         $result = $PDO->query( $sql );
         $rows = $result->fetchAll( PDO::FETCH_ASSOC );
		
        }
		
		
		
		
		
		
		
		
		//Retorna um candidato por data de nascimento
		public function Get_dtnascimento(){
		$search = $_GET['dt_nascimento'];
          $sql = "SELECT * FROM CANDIDATO WHERE cpf LIKE '%" . $search . "%'";
         $result = $PDO->query( $sql );
         $rows = $result->fetchAll( PDO::FETCH_ASSOC );
		
        }
		
		
		
		
		// Retornar todos os candidatos cadastrados no site por cidade
		
        public function getAll_cidade() {
            $result = array();
            $stm = $this->conn->query('SELECT a.nome ,a.cpf,b.cidade FROM CANDIDATO a inner join ENDERECO b on a.id_candidato = b.id_candidato
			 inner join CIDADE c on c.id_cidade = b.id_cidade');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $CANDIDATO = new CANDIDATO();
                    $CANDIDATO->setNome_completo($row->nome_completo);
					$CANDIDATO->setCpf($row->cpf);
					$CIDADE->setCidade($row->cidade);
					
                    $result[] = $CANDIDATO;
                }
            }
            return $result;
		
        }
		
		
		
		
		
		
		
		
		
        }
			
		
    
	
	
	
	
	
	
	
	
	
?>