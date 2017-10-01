<?php

include_once '../MODEL/Vaga.php';
include_once '../DAO/VagaDAO.php';

class ObterVaga {
  
public function ObterVagaDados() {
$vaga = new vaga();

$cargo = $_POST['cargo'];  
$atividade =  $_POST['atividade'] ;  
$remuneracao =  $_POST ['remuneracao'];
$beneficio = $_POST['beneficio'];
$modalidade= $_POST ['emprego'];
$horario = $_POST ['horario'];
$cargahoraria = $_POST ['cargahoraria'];
$nvagas = $_POST ['nvagas'];

$vaga ->setCargo($cargo);
$vaga ->setAtividades($atividades);
$vaga ->setRemun($remuneracao);
$vaga ->setBeneficios($beneficio);
$vaga ->setHorario($horario);
$vaga ->setC_hora($cargahoraria);
$vaga ->setN_vagas($n_vagas);

$enviar = new VagaDAO();
$enviar->Insere($vaga);


}


}
$executar = new ObterVaga();
$executar->ObterVagaDados();