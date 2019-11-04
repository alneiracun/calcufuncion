<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Example Title</title>
    <meta name="description" content="Example description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="" method="get">
        <h2>Seleccione una operacion</h2>
        <br><br>
        <select name="operacion">
            <option value="0">Ninguno</option>
            <option value="1">Seno</option>
            <option value="2">Coseno</option>
            <option value="3">Tangente</option>
        </select>
        <input type="submit" value="calcular">
    </form>
    <div class="calc">

        <?php

if(isset($_REQUEST['operacion'])){// se realiza una validacion del paso de datos, si no hay datos en la variable operacion pasa al codigo else
    
    $op=$_REQUEST['operacion'];// paso los datos del select a una variable
    
    if($op != 0){ // validacion de la opcion escogida, si el valor es 0 (ninguno), pasa a else 
        switch($op){ //switch case de la variable op
            case 1:
                header('Location: aqui va el archivo de seno');//redirige al archivo de seno.php
                break;
            case 2:
                header('Location: cos.php');//redirige al archivo de cos.php
                break;
            case 3:
                header('Location: indextan.php');//redirige al archivo de indextan.php
                break;
    
        }
    }else{
        echo "<h3>Seleccione una operacion</h3>";// error, escogio la opcion ninguno
    }
}else{
        echo "Seleccione una operacion";//error no hay paso de datos
    }

?>
    </div>
</body>

</html>
