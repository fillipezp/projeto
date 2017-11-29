<?php

/*require_once  ('../DAO/VagaDAO.php');
require_once ('../MODEL/Vaga.php');
require_once './login/login_empregador/CNPJ_id.php';

 class ObterVaga {
   
     
     
 function ObterVagaDados($id) {
     
$vaga = new Vaga1();



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


     
if ($vaga!= null){      
$enviar = new VagaDAO();
$enviar->Insere($vaga, $id);

}      

}


}
$executar = new ObterVaga();
$executar->ObterVagaDados();

?
 * >
 */