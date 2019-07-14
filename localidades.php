<?php

    $local = $_REQUEST['local'];
    $f = fopen("nome.csv","r");

    $d = fgetcsv($f);

    foreach ($d as $num) {
        echo "$num";
    }
    
    $d = fgetcsv($f);

    while($d){
    
        if($d[0] == $local){
            break;
        }
        $d = fgetcsv($f);
    }

    foreach ($d as $num) {
        echo "$num";
    }

    $fclose($f);
?>