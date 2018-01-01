<?php
session_start();
if (!isset($_SESSION['nomeUser'])) {
	$_SESSION["nomeUser"] = 'Visitante';
}
?>