<?php  

include("conexao.php");
$pessoa = selectIdPessoa($_POST["id_user"]);

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location:login.php');
	}

$logado = $_SESSION['email'];
?>

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
						<li><a href="dados_user.php">Dados do Usuário</a></li>
							<li><a href="agendamento.php">Agendamento</a></li>
							<li><a href="creditos.php">Compra de Créditos</a></li>
							
							<p><li><a href="index.html" class="botao">Voltar ao site &raquo;</a></li></p><br>
							
							<?php 
					       echo" Bem vindo $logado";
	                        ?>
							<a href="logout.php">|Sair</a>
							
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
		</div>



<body>


	
<form  name ="form" action="caduserCadastro.php" method="POST" 
					<p> 
						Nome<br />
						<input type="text" size="50" maxlength= "50" name="nome">
					</p>
					<p>   
						CPF<br /> 
						<input type="text" size="50"  maxlength= "11" name="cpf"> 
					</p>
					<p>
						RG<br /> 
						<input type="text" size="50" maxlength= "11" name="rg"> 
					</p>   
					<p> 
						Logradouro<br /> 
						<input type="text" size="50" maxlength= "30" name="logradouro"> 
						Número 
						<input type="text" size="5"  maxlength = "5" name="numero">
					<p/>
					<p>
						Complemento <br/>
						<input type="text" size="50" name="complemento">
					</p>
					<p>
						Bairro<br /> 
						<input type="text" size="50" maxlength= "30" name="bairro"> 
					</p>
					<p>
						CEP<br /> 
						<input type="text" size="40" maxlength= "8" name="cep"> 
					</p>
					<p>
						Cidade<br /> 
						<input type="text" size="30" maxlength = "30" name="cidade">	               
						UF 
						<input type="text" size="2"  maxlength= " 2" name="uf">
					<p/>
					<p> 
						Telefone<br /> 
						<input type="text" size="50" maxlength= "13" name="telefone">		
					</p>   
					<p> 
						Rede Social<br /> 
						<input type="text" size="50" maxlength= "30" name="redesocial"> 
					</p>   
					<p> 
						E-mail<br /> 
						<input type="text" size="50" maxlength= "30" name="email"> 
					</p>
					<p> 
						Senha<br /> 
						<input type="password" size="40" maxlength= "6" name="senha"> 
					</p>
					 					
					<p>
				      <input type="submit" name="BTAlterar" value="Alterar"> 
					  <input type="reset" name="BTApaga" value="Apagar">
				    </p>
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
