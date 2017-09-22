<?php

class ObterEmpresa {	
	
public function ObterEmpresa_Dados() {
		
$razao_social = $_POST['razao_social'];
$nfantasia = $_POST['nfantasia'];	
$dtfundacao = $_POST['dd'|| '/' || 'mm'|| '/' || 'aaaa' ];		
$ie = $_POST['ie'];	
$cnpj = $_POST ['cnpj'];	
$ramo = $_POST ['ramo'];	
}




public function ObterEmpresa_Endereco(){
	
$logradouro = $_POST['logradouro'];	
$numero = $_POST['numero'];
$bairro = $_POST ['bairro'];
$complemento = $_POST ['complemento'];
$estado = $_POST ['estado'];
$cidade = $_POST ['cidade'];
$cep = $_POST ['cep'] || '-' || $_POST['cep2'];
}
	
	

public function ObterEmpresa_Contato(){
	
	
$residencial = $_POST['residencial'];
$celular = $_POST['celular'];
$linkedin = $_POST ['linkedin'];
}




}
	
?>	
	
