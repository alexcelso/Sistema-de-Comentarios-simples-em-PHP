<?php

$servidor= "localhost";
$usuario = "root";
$senha   = "";
$banco = "comentarios";


try{
	$conexao = new PDO ('mysql:$servidor; banco=comentarios', $usuario, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	
}catch(PDOException $e){
	echo 'ERROR: '.$e->getMessage();
}
?>