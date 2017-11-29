<?php
// Inicia a sessão
session_start();

// Destrói a sessão
$_SESSION = array();
session_destroy();

// Redireciona para o login.php
header('location: ../../../VIEW/login_empresa.php');
