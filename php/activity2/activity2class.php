<?php

class Datos{

    // Attributes
    public $n;
    public $datos =  array();

    // CONSTRUCTOR
    public function __construct($size){
        $this->n = $size;
        $this->datos = array($size);
    }

    // ------- MAIN Methods

    public function ordena(){

    }

    public function cuenta(){

    }

    public function medVar(){

    }

    public function muestra(){

        for($i = 0;$i<$this->n;$i++){
            echo  $this->datos[$i]." - ";
        }
    }

    // ------- Methods
    public function fillArray(){

        $i = 0;

        for( $i=0; $i < $this->n; $i++){
            $this->datos[$i] = rand(1,50);
        }
    }

} // -----> END 'Datos' Class

?>