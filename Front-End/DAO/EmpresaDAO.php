<?php
        require_once 'ConexaoDao.php';
	require_once '../CONTROL/Obter_Empresa.php';
        require_once '../MODEL/User_Juridico.php';
         require_once '../MODEL/Endereco.php';
   
	
class EmpresaDAO extends Connect {
           
 public function Insere(JURIDICO $dados ){
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $pdo->prepare('INSERT INTO juridico (nfantasia,cnpj,ie,razao_social,ramo) VALUES(:nfantasia,:cnpj,:ie,:razao,:ramo)');
  $stmt->execute(array(':nfantasia' => $dados->getNfantasia(), 
                        ':cnpj'      => $dados->getCnpj(),
                         ':ie'       => $dados->getIe(),  
                         ':razao'    => $dados->getRazao_social(), 
                         ':ramo'     => $dados->getRamo()));                  
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
}      
    } 




	

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