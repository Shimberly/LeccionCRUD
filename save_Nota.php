<?php

include_once("NotaCollector.php");

$nombre = $_POST['nombre'];
$parcial = $_POST['parcial'];
$final = $_POST['final'];
$mejoramiento = $_POST['mejoramiento'];

$total=0;
if($parcial > $final){
    if($parcial > $mejoramiento){
        if($mejoramiento > $final){
            $total=$mejoramiento+$parcial;
        }else{
            $total=$final+$parcial;
        }
    
}
    }
echo "". $total;
$prom = $total/2;
if($prom >> 60){
    $aprueba = true;
}else{
    $aprueba = false;
}
$aprueba =true;
$NotaCollectorObj = new NotaCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
        <?php
            
            $NotaCollectorObj->createNota($nombre,$parcial,$final,$mejoramiento,$aprueba);
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=mostrar.php'>";
        ?>
    </head>
    <body>
       
    </body>
</html>