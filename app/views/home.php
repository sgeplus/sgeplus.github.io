<?php
include "restrito.php";
include "funcoes.php";
checadb();
?>

<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CEFS Camaçari</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +55 71 91234-5678</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> cefscamacari@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">

					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php echo '<li><a href="#"> Olá, ' . $_SESSION["nomeUser"]  . '</a></li>';
									if ($_SESSION["nomeUser"] !== "Visitante") { 
										echo '<li><a href="perfil.php"><i class="fa fa-gear"></i> Perfil</a></li>';
										echo '<li><a href="sair.php"><i class="fa fa-crosshairs"></i> Sair</a></li>';
									}
									if ($_SESSION["nomeUser"] == "Visitante") {	
										echo '<li><a href="login.php" class="active"><i class="fa fa-lock"></i> Login</a></li>';
									}
								?>
							</ul>
						</div>
					</div>
				</div> 
			</div>
		</div>

<div class="header-middle">
	<div class="container">		
		
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="row">
			<p class="pull-left">Copyright © 2017 RESTORE Serviços. Todos os direitos reservados.</p>
			<p class="pull-right">Desenvolvido por <span><a target="_blank" href="https://fb.me/joseluis.cfilho">José Luís</a></span></p>
		</div>
	</div>
</div>
</body>
</html>