<?php

@include 'config.php';

$user_id = $_SESSION['user_id'];

if(!isset($admin_id)){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página de administrador</title>
	<link rel="stylesheet" href="css/component.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
</head>
<body>

<h1>Página de administrador</h1>

<a href="logout.php">Sair</a>

	<?php
	
		echo "Pagina do Administrador"
	
	?>
	
	<script src="js/script.js"></script>
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas
    25/04/2022
-->