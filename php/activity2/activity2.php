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

    if(!empty($_POST['send']) && !empty($_POST['nvalue']) ){

        if( preg_match('/[^0-9]/i', $_POST['nvalue']) == 0 ){

            $data     = new Datos($_POST['nvalue']);

            $data->fillArray();

            if(isset($_POST['sortvalue'])){
                $data->ordena();
            }

            $data->medVar();

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

        <p> Datos : <?php $data->muestra( $data->datos ); ?> </p> <br>
        <?php
            if(isset($_POST['sortvalue'])){
                echo "<p> Datos Ordenados  : </p> ";
                $data->muestra( $data->sorted );
                echo "<br> <br> ";
            }
        ?>

        <strong>Media:</strong> 
        <p> <?php echo $data->media; ?> </p>

        <strong>Varianza:</strong> 
        <p> <?php echo $data->varianza; ?> </p> <br>

        <strong>Cantidad de Valores:</strong> <br> <br>

        <p> <?php
            // Show the Quantity of the elements in the array

            $arrayAux   = array( $data->max );
            $countArray = $data->cuenta( $data->datos );


            for($i=0; $i<$data->max; $i++){
                echo $i+1;
                echo " --> [".$countArray[$i]."] . ";

                if( $i>0 && $i%10 == 0){
                    echo "<br> <br>";
                }
                
            }
        ?> </p>
    </div>
    
</body>
</html>