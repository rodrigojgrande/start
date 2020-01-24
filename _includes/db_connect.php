<?php 
	require("db_config.php");
	$conn = mysqli_connect($serverDb, $userDb, $passDb, $nameDb) or die("Erro de conexao com banco de dados");
 ?>