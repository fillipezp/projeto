<?php


if ( $_SESSION['logado'] != true )  {
   
 
  sleep(4)  ;      
  header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../VIEW/Main_empregador.html');


}


