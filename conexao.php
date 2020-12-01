<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="unifitness";
//cria a conexão
$conexao = mysqli_connect($servername,$username,$password,$dbname);

if(!$conexao){
	die ("Falha na conexão:".mysqli_connect_error());
}else{
	// echo "conexao realizada com sucesso"
	};
	
	function abrirBanco(){
	$conexao = new mysqli("localhost", "root", "", "unifitness");
	return $conexao;
	}
	
	function selectIdPessoa($id_user){
	$banco = abrirBanco();
	$sql = "SELECT * FROM usuario WHERE id =".$id_user;
	$resultado = $banco->query($sql);
	$banco->close();
	$pessoa = mysqli_fetch_assoc($resultado);
	return $pessoa;
	}

?>