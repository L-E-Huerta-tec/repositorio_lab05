<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="">

    Ingrese el precio actual de la gaseosa (3 litros): <br> <input type="text" name="precio"> <br> <br>
    Ingrese la cantidad de unidades que quiere comprar (3 litros): <br> <input type="text" name="cantidad"> <br> <br>
    <input type="submit" name="Calcular" value="Calcular"> <br> <br>

</form>


<?php

    $calcular = $_POST["Calcular"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

        $obsequio = $cantidad * 2;
        $precio_nuevo = $precio - ($precio * 0.05);
        $importe = $precio_nuevo * $cantidad;
        $descuento = $importe * 0.07;
        $pagar_importe = $importe -$descuento;

        echo "El nuevo precio de la gaseosa es: S/ ", $precio_nuevo, "<br>";
        echo "El importe de la compra es: ", $importe, "<br>";
        echo "El importe del descuento es: ", $descuento, "<br>";
        echo "El importe a pagar es: ", $pagar_importe, "<br>";
        echo "Los obsequios totales son: ", $obsequio;

?>

</body>
</html>