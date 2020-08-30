<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Location" content="http://tuweb.com/pagina.html"/>

    <link rel="stylesheet" href="ac2-styles.css">

    <title>Activity 2</title>
</head>
<body>   

    <div class="form-container">
        <h2>Equipo 3 - Actividad 2</h2>

        <form action="activity2.php" method="POST">

            <label for="nvalue">Ingresa el valor del elemento "N" a almacenar:</label>
            <input type="text" id="nvalue" name="nvalue" class="normal-input">

            <label for="nvalue">Ordenar el Arreglo?</label>
            <input type="checkbox" id="sortvalue" name="sortvalue">

            <input type="submit" value="Agregar Elemento" class="btn-submit" name="send">
        </form>

    </div>
</body>


</html>
