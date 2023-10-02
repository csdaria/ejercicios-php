<?php
    $str="1,2,3,2,4,1,5";
    //Transformación de string a array para su manipulación
    $arrStr=explode(',', $str);
    function valoresUnicos($arrStr){
        //Declaración del array donde se va a guardar la solución
        $strSol=array();
        //Variable count que guarda la longitud del array. Equivale al .length en PHP
        $count=count($arrStr);
        
        for($i=0; $i<$count; $i++){
            $elemento=$arrStr[$i];
            //Booleano para verificar si existe ya un elemento previo
            $duplicado=false;
            //Recorremos el array vacío: se guardan todos los avalores hasta que encuentra el elemento duplicado, momento en el cual el booleano 'duplicado' pasa a ser verdadero y no lo incluye
            for($j=0; $j<count($strSol); $j++){
                if($elemento===$strSol[$j]){
                    $duplicado=true;
                    break;
                }
            }

            //Si no es duplicado, se agrega
            if(!$duplicado){
                $strSol[]=$elemento;
            }
        }
        return $strSol;

    }
    $resultado=valoresUnicos($arrStr);
    print_r($resultado);
?>

