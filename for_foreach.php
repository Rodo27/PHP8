<?php

    $base = 5;
    $exp = 4;
    $res = 1;


    for($i = 0; $i <= $exp; $i++){
        $res *= $base;
    }

    echo 'El valor de ' . $base . ' elevado a ' . $exp . ' es: ' .$res;
    echo '<br>';

    $filas = 10;

    for($i = 1; $i <= $filas; $i++){
        for($j = 1; $j <= $i; $j++)
            echo '*';
        echo '<br>';
    }

    $names = ['Aldo', 'Carlos', 'Fernando', 'Victor'];

    //echo $names[0];

    foreach($names as $key => $name){
        echo $key .'---'. $name . '<br>';
    }
