<?php

require_once '../../Obter_Vagas.php';

   

 class captura_cpf{
           
 function captura(int $obj){   
 $cpf= $obj; 
 
 $x = new Recebe();
 $x->recebe($cpf);
  
       } 
           
       }  