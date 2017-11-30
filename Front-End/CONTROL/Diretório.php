<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
            
            
            
              <br/>  <br/>  <br/>  <br/> 
  
             <h2>          
    <center>
   <?php
 $path = "../CURRICULOS/";
   $diretorio = dir($path);

    echo "Repositório de currículos <br/>";    
   while($arquivo = $diretorio -> read()){
       
       
      echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
   }
   $diretorio -> close();
?>
        
        
        
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