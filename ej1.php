<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre='Stan Laurel';
    echo "<br> $nombre <br>";
    $entero=23;
    $decimal=10.50;
    $cadenaDoble="Un misterio. Una felicidad.";
    $cadenaSimple='Existe sin duda la posibilidad de que todo fuera el producto de un sinfín de equívocos provocados por el escándalo americano de 1913 de Desnudo bajando una escalera';
    $booleano=true;
    $arreglao=["Inaplazable", "pasado", "Borges", "Hawthorne", "China", "Cristo", "Li Su", "Primer Emperador"];

    $mensaje=$cadenaDoble." ".$cadenaSimple;
    echo "<br>$mensaje<br>";


    define('CONSTANTE', 6.1912245);
    
    const Goat=10.23;


    var_dump($nombre, $entero, $decimal, $cadenaDoble, $cadenaSimple, $cadenaDoble, $booleano, $arreglao, CONSTANTE, Goat);

    $numChain='47368049';
    //Conversión a número
    $num=(int)$numChain;

?>    
</body>
</html>
