<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Tangente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action=" " method="get">
        <input type="number" placeholder="cateto adyacente" name="ca">
        <input type="number" placeholder="cateto opuesto" name="co">
        <input type="submit" value="calcular">

    </form>
</body>

<?php            
require 'tan.php';
    
    if(isset($_REQUEST['ca']) && isset($_REQUEST['co'])){
        $ca = $_REQUEST['ca'];
        $co = $_REQUEST['co'];        
        tangente($ca, $co);
    }else{
        echo "No hay datos";
    }
?>

</html>
