<?php
        require_once 'ConexaoDao.php';
	require_once '../CONTROL/Obter_Empresa.php';
      //  require_once '../CONTROL/Obter_Candidato.php';
        require_once '../MODEL/Contato.php';
   
      
class ContatoDao_Empresa extends Connect {
    
  
 public function Insere(CONTATO $dados ){
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  echo $dados->getResidencial();
  
  $stmt = $pdo->prepare('INSERT INTO CONTATO(celular,residencial,linkedin)VALUES(:celular,:telefone,:linkedin)');
  $stmt->execute(array(':celular'   => $dados->getCelular(), 
                       ':telefone'  => $dados->getResidencial(),
                       ':linkedin'  => $dados->getLinkedin()));                                        
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  
     
}     
  } 
   
  
  
}