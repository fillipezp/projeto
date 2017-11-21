<?php
require_once '../MODEL/User.php';
require_once '../DAO/UserDao.php';

class Registrar{

public function ObterRegistro(){
    
$usuario = new Usuario();    
$user = $_POST['email'];
$password = $_POST['pass'];


$usuario ->setEmail($user);
$usuario ->setSenha($password);

$enviar = new UserDao();
$enviar->Insere($usuario);


/*
if($user = 1 and $pass=1) {
	
header("Location: ../VIEW/Main_Interno.html");    	
}
*/







    }
}



$executar = new Registrar();

echo $executar ->ObterRegistro();









?>