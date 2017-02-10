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
            <th class='disable'>PARCIAL</th>
            <th class='disable'>FINAL</th>
            <th class='disable'>MEJORAMIENTO</th>
            <th>APRUEBA</th>
            
        </tr>
        <?php
            foreach ($NotaCollectorObj->showNotas() as $c){
            echo "<tr>";
            echo "<td >" . $c->getNombre() . "</td>";                       
            echo "<td class='disable'>" . $c->getParcial() . "</td>"; 
            echo "<td class='disable'>" . $c->getNFinal() . "</td>";                       
            echo "<td class='disable'>" . $c->getMejoramiento() . "</td>"; 
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
