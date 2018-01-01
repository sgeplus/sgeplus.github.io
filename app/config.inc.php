<?php
    define('HOST', 'localhost');
    define('DB',   'sge');
    define('USER', 'root');
    define('PASS', '422101@Br7390');

    /* Sistema de Autoload das Classes */
    function myautoload($class){
        $cDir = ['controllers']; // Define os diretórios que contém Class do PHP.
        $iDir = null; // Usa o padrão Singletonpara incluir as pastas somente uma vez.
        
        foreach($cDir as $dirName){
            if(!$iDir && file_exists(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $class . '.class.php')) {
                include_once(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $class . '.class.php');
                $iDir = true; // Valida $iDir como verdadeiro.
            }
        }
    }
    spl_autoload_register('myautoload');
?>