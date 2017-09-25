<?php
        require_once 'ConexaoDao.php';
        require_once '../CONTROL/Obter_User.php';
        require_once '../MODEL/User.php';
   
      
class UserDao extends Connect {
         
 public function Insere(Usuario $dados ){
    
     
$dados->getEmail();     
     
try { 
  $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
header("Location: ../VIEW/Main_Interno.html");

  $stmt = $pdo->prepare('INSERT INTO usuario (email,senha) VALUES (:email,:senha)');
  $stmt->execute(array(':email'     => $dados->getEmail(),
                        ':senha'    => $dados->getSenha()
                                                    )); 
                                         
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
  
  
  
}      
    } 
}