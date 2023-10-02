<?php 
    //Declaración de array
    $randNum=array();

    //Introducción de los 5 elementos con rand
    for($i=0; $i<5; $i++){
        $randNum=rand(20, 30);
        $randomness[]=$randNum;
    }

    print_r($randomness);
?>