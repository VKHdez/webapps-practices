<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="ac2-styles.css">
    <title>Document</title>
</head>
<body>

    <?php

    include 'activity2class.php';
    $max = 0;

    if(!empty($_POST['send']) && !empty($_POST['nvalue']) ){

        if( preg_match('/[^0-9]/i', $_POST['nvalue']) == 0 ){

            $data     = new Datos($_POST['nvalue']);

            // Find the Highest element in the array
            for( $i=0; $i < $data->n; $i++){

                if($data->datos[$i] > $max){
                    $max = $data->datos[$i];
                }
            }

            if(isset($_POST['sortvalue'])){
                $data->ordena($max);
            }

        }else{
            echo "<div class='alert'>N no es tamaño válido</div>";   
        } 

    }else{
        echo "<div class='alert'>Coloque un tamaño de arreglo válido...</div>";
    }
    ?>


    <div class="result">
        <strong>El valor de N es: <?php echo $data->n; ?> </strong> <br> <br>

        <strong>Cadena:</strong> <br> <br>

        <p> <?php $data->muestra( $data->datos ); ?> </p> <br> <!-- Muestra el arreglo de los datos -->

        <p> <?php $data->medVar(); ?> </p> <!-- Muestra la Media y Varianza -->

        <br> <strong>Cantidad de Valores:</strong> <br> <br> 

        <p> <?php
            // Muestra la cantidad de cada elemento del arreglo
            $countArray = $data->cuenta( $data->datos,$max );

            for($i=0; $i<=$max; $i++){
                echo $i;
                echo " --> [".$countArray[$i]."] . ";

                if( $i>0 && $i%10 == 0){
                    echo "<br> <br>";
                } 
            }
        ?> </p>
    </div>
    
</body>
</html>