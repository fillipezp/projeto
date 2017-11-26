<?php
// Inclui o arquivo de configuração
include('../login/login_empregador/config.php');

// Variavél para preencher o erro (se existir)
$erro = false;

// Apaga usuários
if ( isset( $_GET['del'] ) ) {
	// Delete de cara (sem confirmação)
	$pdo_insere = $conexao_pdo->prepare('DELETE FROM usuarios WHERE user_id=?');
	$pdo_insere->execute( array( (int)$_GET['del'] ) );
	
	// Redireciona para o index.php
	header('location: index.php');
}

// Verifica se algo foi postado para publicar ou editar
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	// Cria as variáveis
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
		
		// Verifica se existe algum campo em branco
		if ( empty ( $valor ) ) {
			// Preenche o erro
			$erro = 'Existem campos em branco.';
		}
	}
	
	// Verifica se as variáveis foram configuradas
	if ( empty( $form_usuario ) || empty( $form_senha ) || empty( $form_nome ) ) {
		$erro = 'Existem campos em branco.';
	}
	
	// Verifica se o usuário existe
	$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE user = ?');
	$pdo_verifica->execute( array( $form_usuario ) );
	
	// Captura os dados da linha
	$user_id = $pdo_verifica->fetch();
	$user_id = $user_id['user_id'];
	
	// Verifica se tem algum erro
	if ( ! $erro ) {
		// Se o usuário existir, atualiza
		if ( ! empty( $user_id ) ) {
			$pdo_insere = $conexao_pdo->prepare('UPDATE usuarios SET user=?, user_password=?, user_name=? WHERE user_id=?');
			$pdo_insere->execute( array( $form_usuario,  crypt( $form_senha ), $form_nome, $user_id ) );
			
		// Se o usuário não existir, cadastra novo
		} else {
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (user, user_password, user_name) VALUES (?, ?, ?)');
			$pdo_insere->execute( array( $form_usuario, crypt( $form_senha ), $form_nome ) );
		}
	}
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Login</title>
                
                
                
                <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>    
  <script type="text/javascript" src="../../VIEW/VALIDAÇÕES JS/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
  <script type="text/javascript" src="../../VIEW/VALIDAÇÕES JS/jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script> 


<script type="text/javascript">
    
jQuery(function($){
$('#form_usuario').mask("99.999.999/9999-99",{placeholder:" "});

});



</script>
            
                
                
               
                
	</head>
	<body>
            
            
              </br></br></br></br></br></br></br></br></br></br></br></br></br>
            
        <center>
            
            
		<p>Para editar, apenas digite o nome de usuário que deseja editar.</p>
                <p><a href="../../VIEW/login_empresa.php">Clique aqui</a> para efetuar o login.</p>
		<form action="" method="post">
			<table>
				<tr>
					<td>Usuário</td>
				</tr>
				<tr>
					<td><input type="text" name="form_usuario" id="form_usuario" required></td>
				</tr>
				<tr>
					<td>Senha</td>
				</tr>
				<tr>
					<td><input type="password" name="form_senha" required></td>
				</tr>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><input type="text" name="form_nome" ></td>
				</tr>
				
				<?php if ( ! empty ( $erro ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $erro;?></td>
					</tr>
				<?php endif; ?>
				
				<tr>
					<td><input type="submit" value="Criar novo usuário"></td>
				</tr>
			</table>
		</form>
		
        </center>
	
	</body>
</html>
