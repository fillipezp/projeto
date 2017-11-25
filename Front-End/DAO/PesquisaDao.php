<?php
  
     require_once 'ConexaoDao.php';
     require_once '../CONTROL/Obter_pesquisavaga.php';
     require_once '../MODEL/Vaga.php'; 
     
     
     

  	
 class PesquisaDAO extends Connect {
      

		// Retornar todos os candidatos cadastrados no site
     
     
     
public function getAll() {

$conn = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);               
    $sql = 'SELECT * FROM VAGAS ';
    foreach ($conn->query($sql) as $row) {
        echo'<fieldset>';
        echo "Codigo da vaga: ".$row['id'] . "<br>";
        echo "Cargo: ".$row['cargo'] . "<br>";
        echo "Remuneração: ".$row['remun'] . "<br>";
        echo "Atividades: ".$row['atividades'] . "<br>";
        echo "Beneficios: ".$row['beneficios'] . "<br>";
        echo "Horário: ".$row['horario'] . "<br>";
        echo "Remuneração: ".$row['remun'] . "<br>";
        echo'<br><a href="../CONTROL/Upload_Curriculos.php"><button>Cadastrar</button></a>'."<br><br><br><br>";
        
        echo'</fieldset>';
       
    }
}



public function getParameter(string $termo) {
$conn = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
              
    $sql = 'SELECT * FROM VAGAS WHERE cargo like "% $termo %" ';
    foreach ($conn->query($sql) as $row) {
        echo "Codigo da vaga: ".$row['id'] . "<br>";
        echo "Cargo: ".$row['cargo'] . "<br>";
        echo "Remuneração: ".$row['remun'] . "<br>";
        echo "Atividades: ".$row['atividades'] . "<br>";
        echo "Beneficios: ".$row['beneficios'] . "<br>";
        echo "Horário: ".$row['horario'] . "<br>";
        echo "Remuneração: ".$row['remun'] . "<br>";
        print "----------------------------------------------------<br>";
        
    }
}

     
   } 	

 ?>    