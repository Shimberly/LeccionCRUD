<?php

include_once('Nota.php');
include_once('Collector.php');

class NotaCollector extends Collector
{
  
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM nota");        
    ##echo "linea 1";
    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new Nota($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'aprueba'});
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }
   
    function createNota($nombre,$parcial,$final,$mejoramiento,$aprueba) {
        $rows = self::$db->insertRow("INSERT INTO nota (nombre,parcial,final,mejoramiento,aprueba) VALUES ('$nombre', '$parcial','$final','$mejoramiento','$aprueba')",null);
        
    }
}
?>

