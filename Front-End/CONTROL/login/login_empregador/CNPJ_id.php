<?php

//require_once '../../Obter_Vaga.php';


 class Transforma_cnpj_id{
           
       function recebe(string $doc){
       $cnpj = $doc;   
       
     
       $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root' ,'' );
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
       $search = $cnpj;
       $sql = "SELECT id_empresa FROM JURIDICO WHERE cnpj LIKE '%" . $search . "%' limit 1";
       $result = $pdo->query($sql);
       $rows = $result->fetch( PDO::FETCH_ASSOC );
       $id = $rows['id_empresa'];
   
       $x = new ObterVaga();
       $x->ObterVagaDados($id);
       }
       }
      
       
