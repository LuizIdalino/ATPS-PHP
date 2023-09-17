<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "site";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM SELECAO";
$consulta_selecao = mysqli_query($conexao, $query);