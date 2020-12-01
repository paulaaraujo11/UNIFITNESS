<?php  
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location:login.php');
	}

$logado = $_SESSION['email'];
?>
<?php  
include "conexao.php"; 
$link=mysqli_connect($servername,$username,$password,$dbname) or die ('Não foi possível conectar: '.mysqli_error($conexao));
$sql="SELECT * FROM usuario WHERE email_user='$logado'";
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
		 <form>

		      <?php
		
		
							$result=mysqli_query($conexao,$sql);
								while($pessoa = mysqli_fetch_array($result)){
									$nome_user = $pessoa['nome_user'];
									$cpf_user = $pessoa['cpf_user'];
									$rg_user = $pessoa['rg_user'];
									$logradouro_user = $pessoa['logradouro_user'];
									$numero_user = $pessoa['numero_user'];
									$complemento_user = $pessoa['complemento_user'];
									$bairro_user = $pessoa['bairro_user'];
									$cep_user = $pessoa['cep_user'];
									$cidade_user = $pessoa['cidade_user'];
									$uf_user = $pessoa['uf_user'];
									$telefone_user = $pessoa['telefone_user'];
									$redesocial_user = $pessoa['redesocial_user'];
									$email_user = $pessoa['email_user'];
									$senha_user = $pessoa['senha_user'];
									$id_user = $pessoa['id_user'];
									
									
									
									echo "<strong>NOME: </strong> $nome_user";
									echo "<br />";
									echo "<strong>CPF: </strong> $cpf_user";
									echo "<br />";
									echo "<strong>RG: </strong> $rg_user";
									echo "<br />";
									echo "<strong>LOGRADOURO: </strong> $logradouro_user";
									echo "<br />";
									echo "<strong>NUMERO: </strong> $numero_user";
									echo "<br />";
									echo "<strong>COMPLEMENTO: </strong> $complemento_user";
									echo "<br />";
									echo "<strong>BAIRRO: </strong> $bairro_user";
									echo "<br />";
									echo "<strong>CEP: </strong> $cep_user";
									echo "<br />";
									echo "<strong>CIDADE: </strong> $cidade_user";
									echo "<br />";
									echo "<strong>UF: </strong> $uf_user";
									echo "<br />";
									echo "<strong>TELEFONE: </strong> $telefone_user";
									echo "<br />";
									echo "<strong>REDE SOCIAL: </strong> $redesocial_user";
									echo "<br />";
									echo "<strong>EMAIL: </strong> $email_user";
									echo "<br />";
									
									
								
								}
							?>
	        </form>
			

        </div>
	</div>	
	
   <form name="alterar" action="altera_user.php" method="POST">
	<input type="hidden" name="id" value=<?=$pessoa["id"]?> />
	<input type="submit" value="Editar Dados" name="editar" />
	</form>
	
	<br>

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