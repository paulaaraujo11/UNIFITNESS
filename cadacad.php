	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>EmirLima - Desenvolvimento web</title>
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
							<li><a href="index.html">Home</a></li>
							<li><a href="academias.html">Academias</a></li>
							<li><a href="servicos.html">Serviços</a></li>
							<li><a href="sobre.html">Sobre</a></li>
							<li><a href="contato.html">Contato</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
	<div class="linha">
		<section>
				<div class="coluna col3 sidebar">
					<h3>LINKS</h3>
					<ul class="sem-marcador sem-padding">
						<li><a href="index.html">Dicas de uma vida saudável</a></li>
						<li><a href="cadastro.html"></a></li>
						<li><a href="cadastro usuario"></a></li>
						<li><a href="imc.php"></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					    <li><a href=""></a></li>
					    <br>
					</ul>
					<a href="servicos.html" class="botao">Voltar &raquo;</a>
				</div>
		</section>
				<div class="coluna col9">
					<h2>Página de Serviços > <em>Cadastro de Academias</em></h2>
					<img src="img/background07-slim.jpg" alt="" />
					<br>
					<form name='signup' method="post" action="cadacad.php" > 
						</p>
						<p> 
							Razão Social<br />
							<input type="text" size="50" name="razaosocial"/>
						</p>
						<p>
							Nome Fantasia<br /> 
							<input type="text" size="30" name="nomefantasia"/>   
						</p>
						<p>   
							Cnpj<br /> 
							<input type="text" size="30" name="cnpj"/> 
						</p>
						<p>
							Insc. Estadual<br /> 
							<input type="text" size="30" name="inscestadual"/> 
						</p>   
						<p> 
							Endereço<br /> 
							<input type="text" size="50" name="endereco"/> 
							Número 
							<input type="text" size="10" name="numero"/>
						</p>
						<p>
							Complemento <br/>
							<input type="text" size="10" name="complemento"/>
						</p>
						<p>
							Bairro<br /> 
							<input type="text" size="30" name="bairro"/> 
						</p>
						<p>
							CEP<br /> 
							<input type="text" size="30" name="cep"/> 
						</p>
						<p>
							Cidade<br /> 
							<input type="text" size="30" name="cidade"/>
						</p>
						<p>	              
							UF 
							<input type="text" size="10" name="uf"/>
						<p/>
						<p> 
							E-mail<br /> 
							<input type="text" size="30" name="email"/>		
						</p>
						<p> 
							Senha<br />
							<input type="text" size="8" name="senha"/>		
						</p>
						<p> 
							Confirmação de Senha<br />
							<input type="text" size="8" name="confirmasenha"/>		
						</p>          
						<p> 
							Telefone<br /> 
							<input type="text" size="35" name="telefone"/> 
						</p>
						<p> 
							Celular<br /> 
							<input type="text" size="35" name="celular"/> 
						</p>      
						<p> 
							Rede Social<br /> 
							<input type="text" size="35" name="redesocial"/> 
						</p>   
						<p> 
							Site<br /> 
							<input type="text" size="35" name="site"/> 
						</p>   
					      <input type="submit" value="Cadastrar"/> 
						  <input type="reset"  value="Apagar"/>
					    </p>
				    </form>
				    <?php
				    $host = "localhost";
					$user = "root";
					$pass = "";
					$banco = "unifitness";
					$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
					$conexao = mysql_select_db($banco) or die (mysql_error());
					?>
					<html>
					<?php
					$razaosocial=$_POST['razaosocial'];
					$nomefantasia=$_POST['nomefantasia'];
					$cnpj=$_POST['cnpj'];
					$inscestadual=$_POST['inscestadual'];
					$endereco=$_POST['endereco'];
					$numero=$_POST['numero'];
					$complemento=$_POST['complemento'];
					$bairro=$_POST['bairro'];
					$cep=$_POST['cep'];
					$cidade=$_POST['cidade'];
					$uf=$_POST['uf'];
					$email=$_POST['email'];
					$senha=$_POST['senha'];
					$confirmasenha=$_POST['confirmasenha'];
					$telefone=$_POST['telefone'];
					$celular=$_POST['celular'];
					$redesocial=$_POST['redesocial'];
					$site=$_POST['site'];
					$sql = mysql_query("INSERT INTO cadacad(razaosocial, nomefantasia, cnpj, inscestadual, endereco, numero, complemento, bairro, cep, cidade, uf, email, senha, confirmasenha, telefone, celular, redesocial, site) VALUES('$razaosocial','$nomefantasia','$cnpj','$email','$inscestadual','$endereco','$numero','$complemento','$bairro','$cep','$cidade','$uf','$email','$senha,'$confirmasenha','$telefone','$celular','$redesocial','$site')");
					?>
					</html>
					<p>Faca seu cadastro utilizando os links abaixo.</p>
					<a href="caduser.html" class="botao">Cadastro de Usuário &raquo;</a>
					<p>
					<a href="cadconsul.html" class="botao">Consulta de cadastro &raquo;</a>
				</div>
			</div>
		</div>
	<div class="footer">
		<div class="linha">
			<footer>
				<div class="coluna col12">
					<span>&copy; 2017 - EmirLima Desenvolvimento web</span>
				</div>
			</footer>
		</div>
	</div>	
</body>
</html>


