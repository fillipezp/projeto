<?php

require_once '../DAO/VagaDAO.php';




$pesquisa = new VagaDAO();
$pesquisa->getAll();