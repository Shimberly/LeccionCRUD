<?php

class Nota
{
    private $id;
    private $nombre;
    private $parcial;
    private $Nfinal;
    private $mejoramiento;
    private $aprueba;
    
     function __construct($id, $nombre, $parcial, $final, $mejoramiento, $aprueba) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
       $this->Nfinal = $final;
       $this->mejoramiento = $mejoramiento;
       $this->aprueba = $aprueba;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
    
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     } 
    
     function setNFinal($id){
       $this->NFinal = $NFinal;
     } 
     function getNFinal(){
       return $this->Nfinal;
     } 
     function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     } 
    
     function setAprueba($aprueba){
       $this->aprueba = $aprueba;
     } 
     function getAprueba(){
       return $this->aprueba;
     }
    
}

?> 
