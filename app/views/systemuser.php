<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/escola/app/config.inc.php';
    $sel = new Select('*', 'tb_usuarios');

    var_dump($sel->result());
?>