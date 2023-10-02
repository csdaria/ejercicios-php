<?php
function findTheLeaders($arr) {
    //Obtener longitud de array con count
    $n = count($arr);
    //Declaración de nuevo array para almacenar los líderes
    $leaders = array();
    $sum= 0; 
    //recorremos el array de derecha a izquierda
    for ($i = $n - 1; $i >= 0; $i--) {
        //si el valor del array es mayor que la suma lo incluimos en el array vacío que acabamos de declarar
        if ($arr[$i] > $sum) {           
            $leaders[] = $arr[$i];
        }
        //se actualiza la sum de los valores a la derecha
        $sum+= $arr[$i]; 
    }
    //se devuelve el array de líderes en orden inverso
    return array_reverse($leaders);
}

$nums = [0, -1, -29, 3, 2];
$result = findTheLeaders($nums);
print_r($result); 
?>