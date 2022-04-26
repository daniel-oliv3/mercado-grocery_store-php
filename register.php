<?php
	
include 'config.php';

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	$email = $_POST['email'];
	$email = filter_var($email, FILTER_SANITIZE_STRING);
	$pass = $_POST['pass'];
	$pass = filter_var($pass, FILTER_SANITIZE_STRING);
	$cpass = $_POST['cpass'];
	$cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

	$image = $_FILES['image']['name'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$image_folder = 'uploader_img/';

}
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar</title>
	<link rel="stylesheet" href="css/component.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<!--Font awesome cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

<!-- ======= Register Form/Formulário de Registro ======= -->
<section class="form-container">
	<form action="" enctype="multipart/form-data" method="POST">
		<h3>Registrar agora</h3>
		<input type="text" name="name" class="box" placeholder="Digite Seu Nome" required>
		<input type="email" name="email" class="box" placeholder="Digite Seu E-mail" required>
		<input type="password" name="pass" class="box" placeholder="Digite Sua Senha" required>
		<input type="password" name="cpass" class="box" placeholder="Confirme Sua Senha" required>
		<input type="file" name="image" class="box" required accept="image/jpg, image/jpeg, image/png">
		<input type="submit" name="submit" value="Registrar Agora" class="btn">
		<p>Já tem uma conta? <a href="login.php">Conecte-se agora</a></p>
	</form>
</section>

	<?php
	
		
	
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