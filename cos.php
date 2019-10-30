<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
</head>
<body>
    
    <form action="">
    
        <input type="text" values="Ingrese número" name="valor">
        <input type="submit" value='Cargar'>

    </form>

    <?php    

    // Integrantes Fernando De Leon, Carlos Alvis

        function funcion2($valor) {
            return cos($valor);
        }
    ?>

    <?php 

    @$valor = $_REQUEST['valor'];

        $result = funcion2($valor);

        echo $result;
        

    ?>

</body>
</html>