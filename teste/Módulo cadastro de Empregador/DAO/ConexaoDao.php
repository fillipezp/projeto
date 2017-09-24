<?php


 class Connect {

     
     
 public function conexao() {


     
try{

$conn = new PDO(
    'mysql:host=localhost;dbname=teste', 'root', ''
);
echo'Conexão realizada com sucesso';
}
catch (PDOException $e)
{
	 echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
  }
    }







?>