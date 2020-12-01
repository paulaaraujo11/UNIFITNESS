
	
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>UniFitness - Plataforma Web</title>
		<link rel="stylesheet" href="css/normalize.css" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/estilo.css" />
		<script type = "text/javascript" src = "validacaoLogin.js"></script>
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
		
		<form method="post" action="openlogin.php" id="formlogin" name="formlogin"onSubmit= " return validacao();" >
		<fieldset id="fie">
		<legend><h1>ACESSO AO SISTEMA </h1></legend><br />
		<label>EMAIL : </label>
		<p>
		<input type="text" name="email" id="email"  /><br />
		</p>
		<label>SENHA :</label>
		<p>
		<input type="password" name="senha" id="senha" /><br />
		</p>
		<input type="submit" value="entrar"  />
		</fieldset>
		</form>
								
		
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