<?php

    $ano = $_REQUEST['ano'];

    $f = fopen("nome.csv","r");
    $d = fgetcsv($f);
    
    $pos = strrpos($d,$ano);
    
    echo "{$d[0]}\t{$d[$pos]}";
    $d = fgetcsv($f);
    
    while($d){

        echo "{$d[0]}\t{$d[$pos]}";
        $d = fgetcsv($f);

    }

    $fclose($f);

?>