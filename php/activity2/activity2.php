<?php
// Subject: "Aplicaciones Web" - Activity2
// Team 3

/*
    Create a class that stores a random numbers group (1...50)
    - Get the Mean and Variance
    - Count numbers 1's , 2's ... 50's
    - Sort the array
    - And show the results
*/

class Datos{
    public $datos = [];
    public $n;

    // ------- MAIN Methods

    public function ordena(){

    }

    public function cuenta(){

    }

    public function medVar(){

    }

    public function muestra(){

    }

    // ------- Methods
} // -----> END 'Datos' Class


// MAIN CODE

if(isset($_POST['send']) && !empty($_POST['nvalue']) && !empty($_POST['arrayvalue']) ){
    echo "loggeado";

    /*
        TODO:
            - Create 'Datos' instance
            - Save data to that instance
            - Validate only numbers in both inputs
            - Implement sorting, count and medVar algorithm
            - Show Resulst
    */
}else{

    /*
        TODO:
            - Redrect to home page (index.html)
    */

    echo "err no";
}

?>