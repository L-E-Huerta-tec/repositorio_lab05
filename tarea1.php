<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="">
        Ingrese la cantidad de hijos que tiene: <br> <br> <input type="text" name="hijos"><br>
        <input type="submit" name="boni" value="Calcule su bonificacion"> <br> <br>

        Ingrese el total vendido del mes: <br> <br> <input type="text" name="ventas_mes"><br>
        <input type="submit" name="sueldo_bruto" value="Calcular el sueldo bruto"> <br> <br>


    </form>

    <?php

        $boni = $_POST["hijos"];
            echo "Su bonificacion es de: S/", $boni * 50, "<br>";

        $ventas = $_POST["ventas_mes"]; 
            $comision = $ventas * 0.075;
            $sueldo_basico = 600;
            $sueldo_bruto = $sueldo_basico + $comision + $boni;
            $descuento = $sueldo_bruto * 0.11;

            echo "El descuento es de un 11%: S/", $descuento, "<br>";
            echo "La comision es de: ", $comision, "<br>";        
            echo "El sueldo bruto es de: S/", $sueldo_bruto, "<br>";
            echo "El sueldo neto del vendedor es de: S/", $sueldo_bruto - $descuento;
        
        
    ?>

</body>
</html>