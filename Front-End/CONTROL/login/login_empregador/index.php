<?php
// Inclui o arquivo de configuração
include('./config.php');

// Inclui o arquivo de verificação de login
include('./verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
//include('./redirect.php');



//require_once  ('../../../DAO/VagaDAO.php');



require_once ('../../../MODEL/Vaga.php');


  if (isset($_POST['submit'])){

       $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
     
       
       $search = $_SESSION['usuario'];
       $sql = "SELECT id_empresa FROM JURIDICO WHERE cnpj LIKE '%" . $search . "%' limit 1";
       $result = $pdo->query($sql);
       $rows = $result->fetch( PDO::FETCH_ASSOC );
       $id = $rows['id_empresa'];
 

$atividade   = $_POST['atividade'];
$cargo       = $_POST['cargo'];   
$remuneracao = $_POST['remuneracao'];
$beneficio   = $_POST['beneficio'];
$cargahoraria= $_POST['cargahoraria'];
$nvagas      = $_POST['nvagas'];
$horario     = $_POST['horario'];


   try { 
     $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO VAGAS (n_vagas,horario,c_hora,remun,atividades,beneficios,cargo,FK_JURIDICO_id_empresa) VALUES(:n_vagas,:horario,:c_hora,:remun,:atividades,:beneficios,:cargo,:FK_JURIDICO_id_empresa)');
  $stmt->execute(array(':n_vagas'        => $nvagas , 
                        ':horario'       => $horario ,
                         ':c_hora'       => $cargahoraria,  
                         ':remun'        => $remuneracao, 
                         ':atividades'   => $atividade ,
                         ':beneficios'   => $beneficio ,
                         ':cargo'        => $cargo ,
                         ':FK_JURIDICO_id_empresa' => $id)); 
  

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
     
}    


  }   
           
 
?>







Olá <b><?php 



echo $_SESSION['nome_usuario']?></b>, <a href="sair.php">clique aqui</a> para sair.
;

<?php if ( $_SESSION['logado'] === true ) {
header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../../VIEW/MAIN_empregador.html');
}else{
    
    
  header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../../VIEW/login_empresa.php'); 
}

