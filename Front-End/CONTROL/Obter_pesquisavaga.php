

<!DOCTYPE html>
<html>
<head>
<title>Vagas</title>
<link href="../VIEW/STYLE/formularios.css" rel="stylesheet">
</head>
<body>

	<div id='cssmenu'>
<ul>
    <li class='active'><a href="../VIEW/BuscarVagas.html">Voltar</a></li>
   
   
    
  
</ul>
</div>
   
 <br/> <br/> 
    
<center>   
 <?php

 
 
require '../DAO/PesquisaDao.php';

$busca = $_POST['busca'];

if($busca <> null){
    
$pesquisa = new PesquisaDAO();
$pesquisa->getParameter($busca);    
    
}else{


$pesquisa = new PesquisaDAO();
$pesquisa->getAll();


}

?>
</center> 

    
   
    
    


<!--RODAPÉ DO SITE-->

<center>
<h3>TI JOBS TECNOLOGIA EM EMPREGOS - AV. PRAIA DE BELAS,  425 CEP: 94485-325 PORTO ALEGRE/RS © Copyright 2017</h3>
</center>

     
    

</body>
</html>