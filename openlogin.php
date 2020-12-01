	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>UniFitness - Plataforma Web</title>
		<link rel="stylesheet" href="css/normalize.css" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/estilo.css" />
	</head>
<body>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col4">
					<h1 class="logo">UniFitness</h1>
					<h4 class="logo">Sua academia em qualquer lugar</h4>						
				</div>
				<div class="coluna col8">
					<nav>
						<ul class="menu inline sem-marcador">
							<li><a href="caduser.php" class="botao">Não tenho cadastro &raquo;</a></li>
							<li><a href="index.html" class="botao">Voltar ao site &raquo;</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
		</div>

<?php 

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$con = $link = mysqli_connect("localhost", "root", "", "unifitness");
$select = "SELECT * FROM `USUARIO` WHERE `email_user` = '$email' AND `senha_user`= '$senha'";
$result = mysqli_query($con, $select);

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:sistema.php');
}
else{
	unset ($_SESSION['email']);
	unset ($_SESSION['senha']);
	header('location:login.php');
	
	}

?>
<div class="footer">
		<div class="linha">
			<footer>
				<div class="coluna col12">
					<span>&copy; 2017 - EA Software Desenvolvimento web</span>
				</div>
			</footer>
		</div>
	</div>	
</body>
</html>