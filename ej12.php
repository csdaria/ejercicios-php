<?php
function elSaltamontes($arr) {
    //Como se hizo en el ejercicio 10, transformación de la cadena a array para manipularla
    $hops = explode(',', $arr);
    //Declaración del array vacío resultado
    $resultado = array();
    //Pos para seguir la posición actual en el array para determinar el valor de los saltos
    $pos = 0;

    //Minetras la posición actual sea menor que el tamaño del array 
    while ($pos < count($hops)) {
        //Obtención del valor del salto en la posición actual
        $hopsRef = (int)$hops[$pos];
        //Se agrega el valor de salto al resultado 
        $resultado[] = $hopsRef;


        //Bucle for para generar los "_"
        for ($i = 1; $i <= $hopsRef; $i++) {
            //Avanzamos la pos actual $pos
            $pos++;

            // Si la posición actual supera el número de saltos de la cuenta, salimos del bucle
            if ($pos >= count($hops)) {
                break;
            } else {
                //Agregamps "_" al array resultado
                $resultado[] = '_';
            }

        }

        if($hopsRef===0){
            break;
        }
        //Incrementamos la posición actual para el siguiente salto
        $pos++;
    }
    //Convertimos el array resultado en string de nuevo para devolverlo como vino: como una cadena
    return implode(',', $resultado);
}

$arr = "2,3,4,1,5,3,6,7,8,1,10,0,20";
$output = elSaltamontes($arr);
echo $output; 
?>