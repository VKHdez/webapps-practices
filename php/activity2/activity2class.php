<?php

class Datos{

    // Attributes
    public $n;
    public $datos  = array();

    // CONSTRUCTOR
    public function __construct($size){
        $this->n      = $size;
        $this->datos  = array($size);

        for( $i=0; $i < $this->n; $i++){ // Fill Array
            $this->datos[$i] = rand(1,50);
        }
    }

    // ------- MAIN Methods

    public function ordena($max){

        // Implementing Count Algorithm
        $aux   = $this->cuenta($this->datos, $max);
        $final = array(); // Create Final array that contains Final index positions

        for($i = 0; $i<$this->n; $i++){
            $final[$i] = 0;
        }

        // Initiate SUM process
        for($i = 2; $i<=$max; $i++){
            $aux[$i] = $aux[$i] + $aux[ ($i-1) ];
        }

        // Set final indexing positions
        for($i=0; $i<$this->n; $i++){

            $final[ $aux[ ($this->datos[$i]) ]-1 ] = $this->datos[$i];
            $aux[ $this->datos[$i]]--;
        }
        
        $this->datos = $final;
    }

    public function cuenta($array, $max){

        $aux = array(); // Create the counting array.

        for($i=0;$i<=$max; $i++){
            $aux[$i] = 0;
        }

        // Count the array elements
        for($i=0; $i<$this->n; $i++){
            $aux[ $array[$i] ]++; // Increase the Count value for each array[i] element 

        }

        return $aux;
    }

    public function medVar(){

        $Media    = array_sum($this->datos) / $this->n;
        $Varianza = 0.0;

        foreach( $this->datos as $valor ){
            $Varianza += pow($valor-$Media, 2);
        }

        $Varianza /= $this->n;

        echo "<strong>La Media es: </strong>".$Media;
        echo "<br> <br> <strong>La Varianza es: </strong>".$Varianza;

    }

    public function muestra($array){

        foreach($array as $value){
            echo  $value." - ";
        }
    }


} // -----> END 'Datos' Class
?>