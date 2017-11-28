<?php
// Inclui o arquivo de configuração
include('./config.php');

// Inclui o arquivo de verificação de login
include('./verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
//include('./redirect.php');


require_once '../login_empregador/CNPJ_id.php';

$cnpj = $_POST['usuario'];
$obj = new Transforma_cnpj_id();
$obj->recebe($cnpj);

?>




Olá <b><?php 



echo $_SESSION['nome_usuario']?></b>, <a href="sair.php">clique aqui</a> para sair.
;

<?php if ( $_SESSION['logado'] === true ) {
 header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../../VIEW/MAIN_empregador.html');
}else{
    
    
  header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../../VIEW/login_empresa.php'); 
}

