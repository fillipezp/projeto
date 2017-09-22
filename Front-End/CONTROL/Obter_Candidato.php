<?php

class ObterCandidato {	
	
public function ObterCandidato_Dados() {
		
$nome_candidato = $_POST['nome_candidato'];
$sexo = $_POST['sexo'];	
$dtnascimento = $_POST['dia'|| '/' || 'mes'|| '/' || 'ano' ];		
$estado_civil = $_POST['estado_civil'];	
$rg = $_POST ['rg'];	
$dt_expedicao = $_POST['dia2'|| '/' || 'mes2'|| '/' || 'ano2' ];		
$cpf = $_POST ['cep'] || '-' || $_POST['cep2'];
$og_expedidor = $_POST['og_expedidor'];
}



public function ObterCandidato_Endereco() {
	
$logradouro = $_POST['logradouro'];	
$numero = $_POST ['numero'];
$bairro = $_POST ['bairro'];
$complemento = $_POST ['complemento'];
$estado = $_POST ['estado'];
$cidade = $_POST ['cidade'];
$cep = $_POST ['cep'];
}
	

public function ObterCandidato_Contato(){

$residencial = $_POST['residencial'];
$celular = $_POST['celular'];
$linkedin = $_POST ['linkedin'];
}
	
}	
?>	
	
