<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="../../resources/css/login.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
		<script type="text/javascript" rsc="../../resources/javascript/bootstrap.js"></script>
		<script type="text/javascript" rsc="../../resources/javascript/bootstrap.min.js"></script>
		<script type="text/javascript" rsc="../../resources/javascript/npm.js"></script>
	</head>
	<body>
		<?php
		session_start("menssages");
		if((!isset ($_SESSION['type']) == false) and (!isset ($_SESSION['message']) == false))
		{echo'<div class="alert alert-'.$_SESSION['type'].'" role="alert" style="text-align:center;">'.$_SESSION['message'].'</div>';
	    session_destroy();}?>
		<div class="pen-title">
		  <h1>Logar</h1>
		</div>
		<form method="POST" action="../../controller/User.php">	
			<div class="module form-module">
			  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
			    <div class="tooltip">Cadastrar</div>
			  </div>
			  <div class="form">
			    <h2>Logar na conta</h2>
			      <input type="text" name="nickName" placeholder="Nome do Usuário"/>
			      <input type="password" name="pass" placeholder="Senha"/>
			      <button type="submit">Login</button>
			  </div>
			  <div class="form">
			    <h2>Create an account</h2>
			      <input type="text" name="firstName" placeholder="Primeiro Nome" />
			      <input type="text" name="lastName" placeholder="Ultimo Nome" />
			      <input type="text" name="user" placeholder="Usuário"/>
			      <input type="password" name="password" placeholder="Senha"/>
			      <input type="email" name="email" placeholder="E-mail"/>
			      <input type="tel" name="tel" placeholder="Telefone"/>
			      <button type="submit">Registrar</button>
			  </div>
			  <div class="cta"><a href="">Esqueci minha senha</a></div>
			</div>
		</form>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="../../resources/javascript/login.js"></script>
	</body>
</html>


