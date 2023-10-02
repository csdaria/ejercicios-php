<?php
    $pares=array();
    //Como dice de 1 a 100, vamos a respetarlo de primeras en el for y no nos cargamos a ningún valor en el comienzo
    for($i=1; $i<=100; $i++){
        if($i%2===0){
            $pares[]=$i;
        }
    }

    print_r($pares);
?>