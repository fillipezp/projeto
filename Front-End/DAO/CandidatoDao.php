
<?php
    require_once 'ConexaoDao.php';
    require_once '../CONTROL/Obter_Candidato.php';
    require_once '../MODEL/User_Candidato.php';

	
class CandidatoDAO extends Connect {
                
 public function Insere(candidato $dados ){
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $pdo->prepare('INSERT INTO candidato (cpf,dt_exp,dt_nascimento,estado_civil,og_exped_uf,sexo,nome_completo,rg) VALUES(:cpf,:dt_exp,:dt_nascimento,:estado_civil,:og_exped_uf,:sexo,:nome_completo,:rg)');
  $stmt->execute(array(':cpf'          =>$dados->getCpf(), 
                       ':dt_exp'       =>$dados->getDt_exp(),
                       ':dt_nascimento'=>$dados->getDt_nascimento(),  
                       ':estado_civil' =>$dados->getEstado_civil(), 
                       ':og_exped_uf'  =>$dados->getOg_exped_uf(),
                       ':sexo'         =>$dados->getSexo(),
                       ':nome_completo'=>$dados->getNome_completo(),
		       ':rg'=>$dados->getRg()
                       ));  
  
  $fk =  $pdo->lastInsertId();


$enviar = new ObterCandidato();
$enviar->ObterCandidato_Endereco($fk);
  
  
  
  
  echo '<script type="text/javascript">
           alert("Salvo com Sucesso !");
         window.history.go(-2);
      </script>';
 
  
  
   
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
}      
    } 

	

    
    
    
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
		
		
	public function Get_CPF(){
	$search = $_GET['cpf'];
        $sql = "SELECT * FROM CANDIDATO WHERE cpf LIKE '%" . $search . "%'";
        $result = $PDO->query( $sql );
        $rows = $result->fetchAll( PDO::FETCH_ASSOC );
		
        }
        
        
        
        
        
        
		
		

	public function Get_dtnascimento(){
	$search = $_GET['dt_nascimento'];
         $sql = "SELECT * FROM CANDIDATO WHERE cpf LIKE '%" . $search . "%'";
         $result = $PDO->query( $sql );
         $rows = $result->fetchAll( PDO::FETCH_ASSOC );
		
        }
		
		
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
