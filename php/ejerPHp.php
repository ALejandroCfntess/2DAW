<?php
   
   if(isset($_POST['precio'])){
   
        $precioCesta = $_POST['precio'];
        
        if ($precioCesta <= 50) {
            $costes += 3.95;
        } else if ($precioCesta >50 && $precioCesta<= 75) {
            $costes += 2.95;
        } else if ($precioCesta >75 && $precioCesta < 100) {
            $costes += 1.95;
        } else {
            echo "envio gratis";
        }
        echo "El precio total de la cesta es: €" . $precioCesta + $costes . "<br>";
    } else {
        echo "Por favor, ingresa un precio válido.";
    }

    if (isset($_POST['precio'])) {
        $precioCesta = floatval($_POST['precio']);
        $costes = calcularCostes($precioCesta);
        echo "Los gastos de envío son: €" . $costes;
    }

    function calcularCostes($precio) {
        switch (true) {
            case ($precio < 50):
                return 3.95;
            case ($precio < 75):
                return 2.95;
            case ($precio < 100):
                return 1.95;
            default:
                return 0;
        }
    }

    echo "<br>";
        $numeros = array(
            $n1= $_POST["n1"],
            $n2= $_POST["n2"],
            $n3= $_POST["n3"],
            $n4= $_POST["n4"],
            $n5= $_POST["n5"]);
            $mayor= null;
            $numeros= aray($n1,$n2,$n3,$n4,$n5);

        $mayor = $numeros[0];
            for ($i = 0; $i < count($numeros); $i++) {
                if ($numeros[$i] > $mayor) {
                    $mayor = $numeros[$i];
                }
            }

        echo "El número mayor es: " . $mayor;
        














    
?>