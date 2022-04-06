<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'copa';
}

switch($pagina){
	case 'selecao': include 'views/selecao.php'; break;
	case 'inserir_selecao': include 'views/inserir_selecao.php'; break;
	default: include 'views/copa.php'; break;
}

# Rodapé
include 'footer.php';
