<?php 

include 'db.php';

$id = $_POST['id'];
$selecao = $_POST['selecao'];
$continente = $_POST['continente'];
$tecnico = $_POST['tecnico'];
$goleiros = $_POST['goleiros'];
$laterais = $_POST['laterais'];
$zagueiros = $_POST['zagueiros'];
$meio_campistas = $_POST['meio_campistas'];
$atacantes = $_POST['atacantes'];


$query = "UPDATE selecao SET selecao='$selecao', continente='$continente', tecnico='$tecnico', goleiros='$goleiros', laterais='$laterais', zagueiros='$zagueiros', atacantes='$atacantes' WHERE id=$id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=selecao');