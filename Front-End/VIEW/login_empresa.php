<?php
// Inicia a sessão
session_start();
?>
<!doctype html>
<html>
	<head>
            
             <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(IMAGENS/wallpaper.wiki-Office-Business-Park-1920x1080-PIC-WPC008189.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}






::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  
  <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>    
  <script type="text/javascript" src="VALIDAÇÕES JS/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
  <script type="text/javascript" src="VALIDAÇÕES JS/jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>   


<script type="text/javascript">
    
jQuery(function($){
$('#Usuário').mask("99.999.999/9999-99",{placeholder:" "});
});



</script>
  
  
 
		<meta charset="UTF-8">
		
		<title>Login</title>
	</head>
	<body>
            <form action="../CONTROL/login/login_empregador/index.php" method="post">
			<table>
				<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Alpha<span>Jobs</span></div>
		</div>
		<br>
                
                <center>
		<div class="login">
				<input type="text"  placeholder="Usuário"  name="usuario" id="Usuário" required> <br>
				<input type="password" placeholder="Senha" name="senha" required><br>
                             
                                
                              
				<input type="button" value="Registrar-se" onClick="javascript:window.location.href='../CONTROL/cria-user-empregador/'"><br>
                                <br><br><br><br>
                                
                                <input type="submit" value="Login"></br>
                              
                                
                                
                                
                                
		</div>
                      </center>
                                
                     
			</table>
		</form>
	</body>
</html>