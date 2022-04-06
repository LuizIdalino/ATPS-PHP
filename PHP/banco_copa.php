<?php require_once "db.php"?>
<?php require_once "views/class.php"?>
<?php
    function inserecopa ($conexao, $copa){
    $sql="INSERT INTO cadastro(selecao, continente, tecnico, goleiro, zagueiro, lateral, meio_campista, atacante) 
        VALUES ('$copa->selecao',
                '$copa->continente',
                '$copa->tecnico',
                '$copa->goleiro',
                '$copa->zagueiro',
                '$copa->lateral',
                '$copa->meio_campista',
                '$copa->atacante')";

    $resultado=mysqli_query($conexao, $sql);
    return $resultado;
    }
?>