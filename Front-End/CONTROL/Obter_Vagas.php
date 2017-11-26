<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Repositório de candidaturas</title>
<link href="../VIEW/STYLE/formularios.css" rel="stylesheet">
  
    

    
    
    
    
    
</head>

	<body>

            <meta charset="utf-8"/>
            
            

	<div id='cssmenu'>
<ul>
    <li class='active'><a href='../VIEW/Main_empregador.html'>PRINCIPAL</a></li>
   
</ul>
</div>
            
            
            
           
            
            
            
            
            
            
            
            
            
           </br></br></br>
            
            <center>
<?php 
include_once('../CONTROL/login/login_candidato/config.php');
	

		$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM VAGAS ORDER BY id DESC');
		$pdo_verifica->execute();
		?>
		<table border="1" cellpadding="5">
		<tr>
			<th>Código</th>
			<th>Número de vagas</th>
			<th>Horário</th>
                        <th>Carga Horaria</th>
                        <th>Remuneração</th>
                        <th>Atividades</th>
                        <th>Beneficios</th>
                        <th>Cargo</th>
                        <th>Adicionar</th>
                   
		</tr>
                
                
                
                
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
                        echo '<td> <a style="color:red;" href="?del=' . $fetch['id'] . '">Candidatar-se</a> "</td>';
                
                            

			echo '</tr>';	
		}
		?>
                
                    
                    
                    
                
       
                   <?php
             if ( isset( $_GET['del'] ) ) {
	$pdo_insere = $conexao_pdo->prepare('Insert into candidatar values(?,60)');
	$pdo_insere->execute( array( (int)$_GET['del'] ) );
	
	// Redireciona para o index.php
	header('location: ../CONTROL/Obter_Vagas.php');
}
                ?>
                
                
    
    
   
    
    
                
		</table>
    
    
</center>
    
            
        
   
             </h2>
           
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