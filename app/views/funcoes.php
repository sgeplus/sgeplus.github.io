<?php

function checadb () {

$usuario_bd = 'root';
$senha_bd   = '422101@Br7390';
$host_db    = 'localhost';
$conexao_pdo = null;

$detalhes_pdo = "mysql:host=$host_db;";
 
// Tenta conectar
try {
 // Cria a conexão PDO
 $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} 
 
// Se algo der errado
catch (PDOException $e) {
 // Se der algo errado, mostra o erro PDO
 print "Erro: " . $e->getMessage() . "<br/>";
   
 // Mata o script
 die();
} 

// Criar o Banco de Dados :: DB_RESTORE :: e suas tabelas
$bd = "db_restore";
$criadb = $conexao_pdo->exec(
        "CREATE DATABASE IF NOT EXISTS `$bd` DEFAULT CHARACTER SET utf8mb4;
        GRANT ALL ON `$bd`.* TO '$usuario_bd'@'localhost';
        FLUSH PRIVILEGES;
        CREATE TABLE IF NOT EXISTS `$bd`.`login` (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        nome  VARCHAR(30) NOT NULL,
        senha VARCHAR(64) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP);
        ALTER TABLE `$bd`.`login` CHANGE senha senha VARCHAR(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL");
} // Finalizando a function checking_db()

function abrirdb() {
        $host_db    = 'localhost';
        $usuario_bd = 'root';
        $senha_bd   = '422101@Br7390';
        $bd = "db_restore";
        $conexao_pdo = null;
        $detalhes_pdo = "mysql:host=$host_db;dbname=$bd";
         
        // Tenta conectar
        try {
         // Cria a conexão PDO
         $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
        } 
         
        // Se algo der errado
        catch (PDOException $e) {
         // Se der algo errado, mostra o erro PDO
         print "Erro: " . $e->getMessage() . "<br/>";
           
         // Mata o script
         die();
        } 

}
?>
