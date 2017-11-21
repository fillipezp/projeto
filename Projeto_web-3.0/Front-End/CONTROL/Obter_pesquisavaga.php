

<!DOCTYPE html>
<html>
<head>
<title>Vagas</title>
<link href="../VIEW/STYLE/formularios.css" rel="stylesheet">
</head>
<body>


   
    
  
</ul>
</div>
   
 <br/> <br/> 
    
<center> 
    
    
 <?php

require '../DAO/PesquisaDao.php';

$busca; 
 $busca = $_POST['busca'];

if($_POST['busca'] <> null){
    
$pesquisa = new PesquisaDAO();
$pesquisa->getParameter($busca);    
    
}else{


$pesquisa = new PesquisaDAO();
$pesquisa->getAll();


}

?>
</center> 

    
   
    
    




<center>
<h3>ALPHA JOBS TECNOLOGIA EM EMPREGOS - AV. PRAIA DE BELAS,  425 CEP: 94485-325 PORTO ALEGRE/RS © Copyright 2017</h3>
</center>

     
    

</body>
</html>