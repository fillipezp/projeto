<?php
require_once '../MODEL/User_Candidato.php';
require_once '../MODEL/Endereco.php';
require_once '../MODEL/Contato.php';
require_once '../DAO/CandidatoDao.php';
require_once '../DAO/EnderecoDao.php';
require_once '../DAO/ContatoDao.php';


class ObterCandidato {
	
public function ObterCandidato_Dados() {
$candidato = new candidato();

$nome_candidato = $_POST['nome_candidato'];
$sexo = $_POST['sexo'];	
$dtnascimento = $_POST['dia'];	
$estado_civil = $_POST['estado_civil'];	
$rg = $_POST ['rg'];	
$dt_expedicao = $_POST['dia2'];		
$cpf = $_POST ['cep'];
$og_expedidor = $_POST['og_expedidor'];

$candidato->setNome_completo($nome_candidato);
$candidato->setSexo($sexo);
$candidato->setDt_nascimento($dtnascimento);
$candidato->setEstado_civil($estado_civil);
$candidato->setRg($rg);
$candidato->setDt_exp($dt_expedicao);
$candidato->setCpf($cpf);
$candidato->setOg_exped_uf($og_expedidor);


$enviar = new CandidatoDAO();
$enviar->Insere($candidato);
}




public function ObterCandidato_Endereco(){

$end = new ENDERECO();
  
$logradouro = $_POST['logradouro'];	
$numero = $_POST['numero'];
$bairro = $_POST ['bairro'];
$complemento = $_POST ['complemento'];
$estado = $_POST ['estado'];
$cidade = $_POST ['cidade'];
$cep = $_POST ['cep']|| '-' || $_POST['cep2'];;

$end->setLogradouro($logradouro);
$end ->setNumero($numero);
$end->setBairro($bairro);
$end->setComplemento($complemento);
$end->setEstado($estado);
$end->setCidade($cidade);
$end ->setCep($cep);

$enviar = new EnderecoDao();
$enviar->Insere($end);
}




public function ObterCandidato_Contato(){
$con = new Contato();
 	
$residencial = $_POST['telefone'];
$celular = $_POST['celular'];
$linkedin = $_POST ['linkedin'];

$con ->setResidencial($residencial);
$con ->setCelular($celular);
$con->setLinkedin($linkedin);

$enviar = new ContatoDao();
$enviar->Insere($con);

}

}

$executar = new ObterCandidato();

echo $executar ->ObterCandidato_Dados();
echo $executar ->ObterCandidato_Endereco();
echo $executar ->ObterCandidato_Contato();





	
