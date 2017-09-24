<?php

require_once '../MODEL/User_Juridico.php';
require_once '../MODEL/Endereco.php';
require_once '../MODEL/Contato.php';
require_once '../DAO/EmpresaDAO.php';
require_once '../DAO/EnderecoDao.php';
require_once '../DAO/ContatoDao.php';





class ObterEmpresa {	  
  
public function ObterEmpresa_Dados() {
$empresa = new JURIDICO();

    
$razao = $_POST['razao_social'];  
$nfantasia =  $_POST['nfantasia'] ;  
$cnpj =  $_POST ['cnpj'];
$ie = $_POST['inscric'];
$ramo = $_POST ['ramo'];

$empresa ->setRazao_social($razao);
$empresa ->setNfantasia($nfantasia);
$empresa ->setCnpj($cnpj);
$empresa ->setIe($ie);
$empresa ->setRamo($ramo);


$empresadao = new EmpresaDAO;
$empresadao->Insere($empresa);
}



public function ObterEmpresa_Endereco(){

$end = new ENDERECO();
  
$logradouro = $_POST['logradouro'];	
$numero = $_POST['numero'];
$bairro = $_POST ['bairro'];
$complemento = $_POST ['complemento'];
$cep = $_POST ['cep'] || '-' || $_POST['cep2'];

$end->setLogradouro($logradouro);
$end ->setNumero($numero);
$end->setBairro($bairro);
$end->setComplemento($complemento);
$end ->setCep($cep);

$enviar = new EnderecoDao();
$enviar->Insere($end);
}



public function ObterEmpresa_Contato(){

 $con = new Contato();
 	
$residencial = $_POST['residencial'];
$celular = $_POST['celular'];
$linkedin = $_POST ['linkedin'];

$con ->setResidencial($residencial);
$con ->setCelular($celular);
$con->setLinkedin($linkedin);

$enviar = new ContatoDao();
$enviar->Insere($con);

}

}

$executar = new ObterEmpresa();

echo $executar ->ObterEmpresa_Dados();
echo $executar ->ObterEmpresa_Endereco();
//echo $executar ->ObterEmpresa_Contato();





	
