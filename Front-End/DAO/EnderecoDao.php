<?php
        require_once 'ConexaoDao.php';
	require_once '../CONTROL/Obter_Empresa.php';
        require_once '../MODEL/Endereco.php';
   
      
class EnderecoDao extends Connect {
         
 public function Insere(ENDERECO $dados ){
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $pdo->prepare('INSERT INTO ENDERECO(bairro,cep,complemento,logradouro,numero) VALUES (:bairro,:cep,:complemento,:logradouro,:numero)');
  $stmt->execute(array(':bairro' => $dados->getBairro(), 
                        ':cep'      => $dados->getCep(),
                        ':complemento'      => $dados->getComplemento(),
                         ':logradouro'   => $dados->getLogradouro(),  
                         ':numero'    => $dados->getNumero())); 
                                         
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
}      
    } 
}