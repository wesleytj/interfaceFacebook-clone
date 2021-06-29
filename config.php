<?php

$servidor = "localhost";
$usuario = "root";
$senha = '';
$dbname = "facebook_clone";


$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao) {
	die("Falha ao conectar".mysqli_connect_error());
}

?>