<?php
include_once("NotaCollector.php");

$NotaCollectorObj = new NotaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title> Calificaciones </title>
    <link rel="stylesheet" href="bootstrap.css">
          
</head>
<body>
    
    
    <table class="table">
        <tr>    
            <th>NOMBRE</th>
            <th>PARCIAL</th>
            <th>FINAL</th>
            <th>MEJORAMIENTO</th>
            <th>APRUEBA</th>
            
        </tr>
        <?php
            foreach ($NotaCollectorObj->showNotas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getNombre() . "</td>";                       
            echo "<td>" . $c->getParcial() . "</td>"; 
            echo "<td>" . $c->getNFinal() . "</td>";                       
            echo "<td>" . $c->getMejoramiento() . "</td>"; 
            if ($c->getAprueba() == true){
                 echo "<td>Si</td>";
            }else{
                 echo "<td>No</td>";
            }
           
            
          
            echo "</tr>"; 
                
        }

        ?>

    </table>

   
 
</body>
</html>
