<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);


   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){
      
        if($row['user_type'] == 'admin'){
            $_SESSION['admin_id'] = $row['id'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){
            $_SESSION['admin_id'] = $row['id'];
            header('location:index.php');
   }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/component.css">
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<!-- `` Font awesome cdn link `` -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

<div class="message">
	<span></span>
	<i class="fas fatimes" onclick="this.parentElement.remove();"></i>
</div>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- ======= Register Form/Formulário de Registro ======= -->
<section class="form-container">
	<form action="" enctype="multipart/form-data" method="POST">
		<h3>Conecte-se agora</h3>
		<input type="email" name="email" class="box" placeholder="Digite Seu E-mail" required>
		<input type="password" name="pass" class="box" placeholder="Digite Sua Senha" required>
		<input type="submit" name="submit" value="Registrar Agora" class="btn">
		<p>Não tem conta? <a href="register.php">Registrar agora</a></p>
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