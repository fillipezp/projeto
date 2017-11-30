<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Repositório de candidaturas</title>



<link href='../VIEW/STYLE/formularios.css' rel="stylesheet">
  
          
</head>
    
    

   <body background="../VIEW/IMAGENS/E280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACwhite-background-hd-wallpapers-and-images.jpg">


                 <meta charset="utf-8"/>
            

	<div id='cssmenu'>
<ul>
    <li class='active'><a href='../VIEW/Main_candidato.html'>PRINCIPAL</a></li>
    
   
</ul>
</div>
            
            
            
        
            
           </br></br></br>
            
            <center>
                
<?php 

error_reporting(0);
ini_set(“display_errors”, 0 );
       

include_once('../CONTROL/login/login_candidato/config.php');
	

		$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM VAGAS ORDER BY id DESC');
		$pdo_verifica->execute();
                
		?>
                
                
                <h2>  
		<table border="3" cellpadding="8" >
                    
		<tr>
			<th>Código</th>
			<th>Número de vagas</th>
			<th>Horário</th>
                        <th>Carga Horaria</th>
                        <th>Remuneração</th>
                        <th>Atividades</th>
                        <th>Beneficios</th>
                        <th>Cargo</th>
                        <th>Candidatar-se</th>
                   
		</tr>
                    
                </h2>
		<?php
           
                while( $fetch = $pdo_verifica->fetch() ) {
			echo '<tr>';
                        echo '<td>' . $fetch['id'] . '</td>';
			echo '<td>' . $fetch['n_vagas'] . '</td>';
			echo '<td>' . $fetch['horario'] . '</td>';
			echo '<td>' . $fetch['c_hora']." Horas". '</td>';
                        echo '<td>' . $fetch['remun'] . '</td>';
                        echo '<td>' . $fetch['atividades'] . '</td>';
                        echo '<td>' . $fetch['beneficios'] .'</td>';
                        echo '<td>' . $fetch['cargo'] . '</td>';
                        echo '<td> <a style="color:red;" href="?del=' . $fetch['id'] . '">Candidatar-se</a> </td>';
                
                        
			echo '</tr>';	
		  }

              ?>
                 
               
              <?php
       require_once './login/login_candidato/verifica_login.php';
    
       $cpf = $_SESSION['usuario'];
       
       $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
       $search = $cpf;
       $sql = "SELECT id_candidato FROM CANDIDATO WHERE cpf LIKE '%" . $search . "%'";
       $result = $pdo->query($sql);
       $rows = $result->fetch( PDO::FETCH_ASSOC );
       $id = $rows['id_candidato'];
   
       
       
        if ( isset( $_GET['del'] ) ) {
	$pdo_insere = $conexao_pdo->prepare('Insert into candidatar values(?,?)');
	$pdo_insere->execute( array( (int)$_GET['del'],
                                     (int)$id ));
	
        // Redireciona para o index.php
	header('location: ../CONTROL/Obter_Vagas.php');
}
              
              ?>  
                
    
  
		    </table>
    
    
</center>
    
            
        
   
        
           
        <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/> 
         <br/>  <br/>  <br/>  <br/>  <br/>   <br/>  <br/> 
         
         
<!--RODAPÉ DO SITE-->
<div id="footer">
<center>
<h3>ALPHA JOBS TECNOLOGIA EM EMPREGOS - AV. PRAIA DE BELAS,  425 CEP: 94485-325 PORTO ALEGRE/RS © Copyright 2017</h3>
</center>
</div>
            
            
            
    </body>
</html>