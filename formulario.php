<?php
include_once("NotaCollector.php");
$NotaCollectorObj = new NotaCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIO </title>
    <link rel="stylesheet" href="bootstrap.css">
          
</head>
<body>
    
    <div class="container">
                
                <form class="form-group" method="post" action="save_Nota.php">
                    <div class="row">
                        
                        <label >Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="nombre" placeholder="Introduce tu nombre">
                    </div>
                    <div class="row">
                        <label>Parcial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="parcial" placeholder="Introduce tu nota del parcial">
                    </div>
                    
                    <div class="row">
                        <label>Final&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="final" placeholder="Introduce tu nota del final">
                    </div>
                    
                    <div class="row">
                        <label>Mejoramiento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="mejoramiento" placeholder="Introduce tu nota del mejoramiento">
                    </div>
                    
                    <br><br>
                    <button type="submit">Ingresar</button>

                </form>
            </div>
    </body>
</html>