<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Validação PHP</title>
		<link rel="stylesheet" href="css/normalize.css" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/estilo.css" />
	</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="unifitness";
//cria a conexão
$con= new mysqli($servername,$username,$password,$dbname);

//verifica a conexão
if($con->connect_error){
	die("Erro na conexão".$con->connect_error);
}
$ql="select autor from livros";
$result=$con->query($ql);
if($result->num_rows>0){
	echo "<select>";
	echo "<option value=''>Selecione um Autor</option>";
while($row= mysqli_fetch_array($result)){
	echo "<option value = '".$row['autor']."'>".$row['autor']."</option>";
}
    echo "</select>";
}else{
	echo "0 result";
}
$con->close(); 
?>
</body>
</html>
