<?php
    require_once 'ConexaoDao.php';
	require_once '../CONTROL/Obter_Empresa.php';
   
	
   class EmpresaDAO extends ConexaoDao {
        
		
		
		// Retornar todos am empresas cadastrados no site
        public function getAll() {
            $result = array();
            $stm = $this->conn->query('SELECT * FROM JURIDICO o');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $JURIDICO = new JURIDICO();
                    $JURIDICO->setRazao_social($row->razao_social);
					$JURIDICO->setNfantasia($row->nfantasia);
					$JURIDICO->setCnpj($row->cnpj);
					$JURIDICO->setIe($row->ie);
					$JURIDICO->setRamo($row->ramo);
                    $result[] = $JURIDICO;
                }
            }
            return $result;
		
        }
		
		
		
		
		//Retorna um candidato por cnpj
		public function Get_CPF(){
		$search = $_GET['cpf'];
          $sql = "SELECT * FROM JURIDICO WHERE cnpj LIKE '%" . $search . "%'";
         $result = $PDO->query( $sql );
         $rows = $result->fetchAll( PDO::FETCH_ASSOC );
		
        }
		
	
		
		
		// Retornar todas as empresas cadastrados no site por cidade
		
        public function getAll_cidade() {
            $result = array();
            $stm = $this->conn->query('SELECT a.nome ,a.cpf,b.cidade FROM JURIDICO a inner join ENDERECO b on a.id_empresa = b.id_juridico
			 inner join CIDADE c on c.id_cidade = b.id_cidade');
            if($stm) {
                while($row = $stm->fetch(PDO::FETCH_OBJ)) {
                    $CANDIDATO = new CANDIDATO();
                    $CANDIDATO->setNome_completo($row->razao_social);
					$CANDIDATO->setCnpj($row->cnpj);
					$CANDIDATO->setCidade($row->cidade);
					
                    $result[] = $CANDIDATO;
                }
            }
            return $result;
		
        }
		
		
		
		
		
		
		
		
		
        }
			
		
    
	
	
	
	
	
	
	
	
	
?>