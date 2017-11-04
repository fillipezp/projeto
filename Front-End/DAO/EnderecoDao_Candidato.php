<?php
        require_once 'ConexaoDao.php';
        require_once '../CONTROL/Obter_Candidato.php';
        require_once '../MODEL/Endereco.php';
      
   
      
class EnderecoDao_Candidato extends Connect {
         
 public function Insere(ENDERECO $dados ){
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $pdo->prepare('INSERT INTO ENDERECO(logradouro,numero,bairro,complemento,estado,cidade,cep,id_canditato_fk) VALUES (:logradouro,:numero,:bairro,:complemento,:estado,:cidade,:cep,:id_canditato_fk)');
  $stmt->execute(array(':logradouro'     => $dados->getLogradouro(),
                        ':numero'        => $dados->getNumero(),
                        ':bairro'        => $dados->getBairro(),
                        ':complemento'   => $dados->getComplemento(),  
                        ':estado'        => $dados->getEstado(),
                        ':cidade'        => $dados->getCidade(),
                        ':cep'           => $dados->getCep(),
                        ':id_canditato_fk' => $dados->getFk_candidato() )); 
                                         
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
}      
    } 
}
