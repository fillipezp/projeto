<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
background
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Repositório de candidaturas</title>
<link href="../VIEW/STYLE/formularios.css" rel="stylesheet">
  
    

    
    
    
    
    
</head>

    <body background="../VIEW/IMAGENS/E280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACE280ACwhite-background-hd-wallpapers-and-images.jpg">

            <meta charset="utf-8"/>
            
            

	<div id='cssmenu'>
<ul>
    <li class='active'><a href='../VIEW/Main_empregador.html'>PRINCIPAL</a></li>
   
</ul>
</div>
            
            
            
                <center>
                
<?php 



require_once('../CONTROL/login/login_empregador/config.php');
require_once('../CONTROL/login/login_empregador/verifica_login.php');
	


 
                $search = $_SESSION['usuario']; 

                $pdo_verifica = $conexao_pdo->prepare("select b.id, b.cargo, b.n_vagas,b.remun,b.atividades,b.beneficios  from juridico a inner join vagas b on a.id_empresa=b.FK_JURIDICO_id_empresa where a.cnpj like '%" . $search . "%'");
		$pdo_verifica->execute();
                
      
                
		?>
                    
                    
                    <h1> Vagas cadastradas </h1>
                
                <h2>  
		<table border="3" cellpadding="8" >
                    
		<tr>
			<th>Código</th>
                        <th>Cargo</th>
			<th>Número de vagas</th>
                        <th>Remuneração</th>
			
                       
                        <th>Status</th>
                   
		</tr>
                    
                </h2>
		<?php
           
                while( $fetch = $pdo_verifica->fetch() ) {
			echo '<tr>';
                        echo '<td>' . $fetch['id'] . '</td>';
                        echo '<td>' . $fetch['cargo'] . '</td>';
			echo '<td>' . $fetch['n_vagas'] . '</td>';
                        echo '<td>' . $fetch['remun'] . '</td>';
			echo '<td>' . $fetch['atividades'] . '</td>';
                        echo '<td>' . $fetch['beneficios'] . '</td>';
                        
                       
                        echo '<td> <a style="color:red;" href="?del=' . $fetch['id'] . '">Finalizar Vaga</a> </td>';
                
                        
			echo '</tr>';	
		  }

              ?>
                 
               
               
                 
               
              <?php
       
              
       
        if ( isset( $_GET['del'] ) ) {
	$pdo_insere = $conexao_pdo->prepare('delete from vagas where id=?');
	$pdo_insere->execute( array( (int)$_GET['del'],
                                      ));
	
        // Redireciona para o index.php
	
              header('location: Mostrar_Candidaturas.php');
}
              
              ?>  
                
    
  
		    </table>
                    
                </br></br> </br> </br> </br> </br> </br> </br> </br> 
                    
              <?php
       
       
              
              
                $search = $_SESSION['usuario']; 

                
                $pdo_verifica = $conexao_pdo->prepare("select a.nome_completo,a.cpf,b.residencial,b.celular,d.id,d.cargo,d.remun from candidato a inner join contato b on a.id_candidato=b.FK_USER_id_candidato inner join candidatar c on c.FK_CANDIDATO_id_candidato = a.id_candidato inner join vagas d on d.id=c.FK_VAGAS_id  inner join juridico e on e.id_empresa= d.FK_JURIDICO_id_empresa where d.FK_JURIDICO_id_empresa=e.id_empresa and e.cnpj like '%" . $search . "%' order by d.id");
		$pdo_verifica->execute();
                
      
                
		?>
                    
                    
                  <h1> Candidatos</h1>
                 
                <h2>  
		<table border="3" cellpadding="8" >
                    
		<tr>
			<th>Nome do candidato</th>
                        <th>CPF</th>
			<th>Telefone residencial</th>
                        <th>Celular</th>
                        <th>Código da vaga</th>
                        <th>Cargo</th>
			<th>Remuneração</th>
                       
		</tr>
                    
                </h2>
		<?php
           
                while( $fetch = $pdo_verifica->fetch() ) {
			echo '<tr>';
                        echo '<td>' . $fetch['nome_completo'] . '</td>';
                        echo '<td>' . $fetch['cpf'] . '</td>';
			echo '<td>' . $fetch['residencial'] . '</td>';
                        echo '<td>' . $fetch['celular'] . '</td>';
			echo '<td>' . $fetch['id'] . '</td>';
                        echo '<td>' . $fetch['cargo'] . '</td>';
                        echo '<td>' . $fetch['remun'] . '</td>';
                
                        
			echo '</tr>';	
		  }

              ?>
                    
                    
                    
                    
                    
                    
                    
                     </table>
                    
                    
                    
                    <a href="Diretório.php">Visualizar currículos</a>
                    
                    
    
    
</center>
    
            
        
          
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           </br></br></br>
            
            <center>
<?php 










  ?>
                
                
    
  
		</table>
    
    
</center>
    
            
        
   
             </h2>
           
        <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/> 
         <br/>  <br/>  <br/>  <br/>  <br/>   <br/>  <br/> 
<!--RODAPÉ DO SITE-->

<center>
<h3>ALPHA JOBS TECNOLOGIA EM EMPREGOS - AV. PRAIA DE BELAS,  425 CEP: 94485-325 PORTO ALEGRE/RS © Copyright 2017</h3>
</center>

            
            
            
    </body>
</html>