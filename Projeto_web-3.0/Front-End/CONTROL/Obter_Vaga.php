<?php


require_once '../MODEL/Vaga.php';
require_once '../DAO/VagaDAO.php';

class ObterVaga {
  
public function ObterVagaDados() {
$vaga = new Vaga();

$atividade   = $_POST['atividade'];
$cargo       = $_POST['cargo'];   
$remuneracao = $_POST['remuneracao'];
$beneficio   = $_POST['beneficio'];
$cargahoraria= $_POST['cargahoraria'];
$nvagas      = $_POST['nvagas'];
$horario     = $_POST['horario'];

$vaga ->setAtividades($atividade);
$vaga ->setCargo($cargo);
$vaga ->setRemun($remuneracao);
$vaga ->setBeneficios($beneficio);
$vaga ->setC_hora($cargahoraria);
$vaga ->setN_vagas($nvagas);
$vaga ->setHorario($horario);



$enviar = new VagaDAO();
$enviar->Insere($vaga);


}


}
$executar = new ObterVaga();
$executar->ObterVagaDados();