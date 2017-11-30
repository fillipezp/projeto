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
  
  $stmt = $pdo->prepare('INSERT INTO CONTATO(celular,residencial,linkedin,id_juridico_fk)VALUES(:celular,:telefone,:linkedin,:id_juridico_fk)');
  $stmt->execute(array(':celular'   => $dados->getCelular(), 
                       ':telefone'  => $dados->getResidencial(),
                       ':linkedin'  => $dados->getLinkedin(),
                       ':id_juridico_fk' => $dados->getFk_empresa()));                                        
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  
     
}     
  } 
   
  
  
}