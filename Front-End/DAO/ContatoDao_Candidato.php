<?php
        require_once 'ConexaoDao.php';
//	require_once '../CONTROL/Obter_Empresa.php';
        require_once '../CONTROL/Obter_Candidato.php';
        require_once '../MODEL/Contato.php';
   
      
class ContatoDao_Candidato extends Connect {
    
  
 public function Insere(CONTATO $dados ){
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  echo $dados->getResidencial();
  
  $stmt = $pdo->prepare('INSERT INTO CONTATO(celular,residencial,linkedin,FK_USER_id_candidato)VALUES(:celular,:telefone,:linkedin,:FK_USER_id_candidato)');
  $stmt->execute(array(':celular'   => $dados->getCelular(), 
                       ':telefone'  => $dados->getResidencial(),
                       ':linkedin'  => $dados->getLinkedin(),
                       ':FK_USER_id_candidato'=> $dados->getFk_candidato()  ));                         
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  
     
}     
  } 
   
  
  
}