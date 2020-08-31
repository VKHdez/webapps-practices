<?php

class Datos{

    // Attributes
    public $n;
    public $max;
    public $datos  = array();
    public $sorted = array();

    public $media;
    public $varianza;

    // CONSTRUCTOR
    public function __construct($size){
        $this->n      = $size;
        $this->datos  = array($size);

        $this->max     = 0;
        $this->media   = 0;
        $this->varianza = 0;
    }

    // ------- MAIN Methods

    public function ordena(){

        // Implementing Count Algorithm
        $aux   = $this->cuenta($this->datos);
        $final = array(); // Create Final array that contains Final index positions

        for($i = 0; $i<$this->n; $i++){
            $final[$i] = 0;
        }

        // Initiate SUM process
        for($i = 2; $i<=$this->max; $i++){
            $aux[$i] = $aux[$i] + $aux[ ($i-1) ];
        }

        // Set final indexing positions
        
        for($i=0; $i<$this->n; $i++){            
            $final[ $aux[ $this->datos[$i] ]-1 ] = $this->datos[$i];
            $aux[ $this->datos[$i]] --;
        }

        $this->sorted = $final;
    }

    public function cuenta($array){

        // print_r($array);

        $aux = array(); // Create the counting array.

        for($i=0;$i<=$this->max; $i++){
            $aux[$i] = 0;
        }

        // Count the array elements
        for($i=0; $i<$this->n; $i++){
            $aux[ $array[$i] ]++; // Increase the Count value for each array[i] element 
        }
        return $aux;
    }

    public function medVar(){

        $this->media    = array_sum($this->datos) / $this->n;
        $auxVarianza = 0.0;

        foreach( $this->datos as $valor ){
            $auxVarianza += pow($valor-$this->media, 2);
        }

        $auxVarianza /= $this->n;

        $this->varianza = $auxVarianza;
    }

    public function muestra($array){

        foreach($array as $value){
            echo  $value." - ";
        }
    }

    // ------- Methods

    public function fillArray(){

        $i = 0;

        for( $i=0; $i < $this->n; $i++){
            $this->datos[$i] = rand(1,50);
            $this->sorted[$i] = 0;
        }

        $this->max = $this->higher($this->datos);
    }

    public function higher($array){

        $i = 0; $max = 0;

        for( $i=0; $i < $this->n; $i++){

            if($array[$i] > $max){
                $max = $array[$i];
            }
        }

        return $max;
    }


} // -----> END 'Datos' Class

?>