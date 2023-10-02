<?php
    $arrayDiverso=[1, 2, 'antonio', 200, 'pepe'];
    //Qué fue antes? Length o count??
    $length=count($arrayDiverso);

    for($i=$length-1; $i>=0; $i--){
        echo $arrayDiverso[$i]."\n";
    }

?>