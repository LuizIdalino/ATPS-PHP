<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "atps";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM cadastro";
$consulta_selecao = mysqli_query($conexao, $query);
?>
