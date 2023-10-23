<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $VarString = "Hola";
        $VarString2 = "Mundo";
        $VarEspacio = " ";
        $VarConcatenacion=$VarString.$VarEspacio.$VarString2;
        echo $VarConcatenacion;
        echo "<br>";
    
        $VarBool = false;
        if ($VarBool==1){
            echo "<b>"."El booleano esta verdadero"."<br></b>";
        } else{
            echo "<b>"."El booleano es fake"."<br></b>";
        }
        echo "<br>";
        define("PI", 3.14);
        echo "<b>".PI."<br></b>";
        echo "<br>";
        $array1 = array(
            "valor1"=> "1",
            "valor2"=> "2",
            "valor3"=> "3",
        );
        echo "<b>";
        print_r($array1);
        echo "<br>";

        $VarBool = false;
        echo ($VarBool);
        echo"<br>";

        echo str_replace(" ","",$VarConcatenacion);
        echo "<br>";
        echo "<br>";

        echo "<br>";
        $VarTexto = "El operador “+” sirve para sumar el valor de variables. Con la “/”podemos
        dividir valores entre variables. El símbolo del dólar “\$” indica que estamos
        utilizando variables pero no lo usaremos en las constantes o globales";
        echo strlen($VarTexto);
        echo "<br>";

        $VarHello = "Hello Word";
        $VarHello = str_replace ("o","", $VarHello);
        $VarHello = str_replace ("e","", $VarHello);
        echo  $VarHello;
        echo "<br>";
        
        $VarNoContent="";
        echo empty($VarNoContent);
        echo "<br>";
        echo intval($VarHello);
        echo "<br>";

    ?>
</body>
</html>