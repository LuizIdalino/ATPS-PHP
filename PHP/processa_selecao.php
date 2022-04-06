<?php require_once "db.php"?>
<?php require_once "views/class.php"?>
<?php require_once "banco_copa.php"?>
<?php
    $copa=new Copa;
    
    $copa->selecao        =$_POST["selecao"];
    $copa->continente     =$_POST["continente"];
    $copa->tecnico        =$_POST["tecnico"];
    $copa->goleiro        =$_POST["goleiro"];
    $copa->zagueiro       =$_POST["zagueiro"];
    $copa->lateral        =$_POST["lateral"];
    $copa->meio_campista  =$_POST["meio_campista"];
    $copa->atacante       =$_POST["atacante"];
if(insereCopa($conexao, $copa)){
    echo "Inserido com sucesso!";
}else{
    echo mysqli_error($conexao);
}

?>
