<?php
$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);
if (!empty($controle) && isset($controle)) {

    if ($controle == 'listar1') {
        include_once 'listar1.php';
    } else if ($controle == 'listar2') {
        include_once 'listar2.php';
    } else if ($controle == 'listar3') {
        include_once 'listar3.php';
    } else if ($controle == 'listar4') {
        include_once 'listar4.php';
    }
}