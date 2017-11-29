<?php
// Inclui o arquivo de configuração
include('./config.php');

// Inclui o arquivo de verificação de login
include('./verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
//include('./redirect.php');


// Envia o CPF do candidato para ser vinculado junto a vaga que ele se candidatar



?>

Olá <b><?php echo $_SESSION['nome_usuario']?></b>, <a href="sair.php">clique aqui</a> para sair.


<?php if ( $_SESSION['logado'] === true ) {
	  header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../../VIEW/main_candidato.html');
          
          


}else{
    
    
    header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . '../../../../VIEW/login_candidato.php'); 
}

?>