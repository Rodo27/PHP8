<?php

    $i = 1;

    while($i <= 10){
        echo "Hola Mundo" ."<br>";
        $i++;
    }

    do{
        echo "Hola Mundo" ."<br>";
        $i++;

    }while($i <= 10);


    $base = 2;
    $exp = 5;

    $res = 1;
    $i = 1;

    while($i <= $exp){
        $res *= $base;
        $i++;
    }

    echo 'El valor de ' . $base . ' elevado a ' . $exp . ' es: ' .$res;

    #2086750
    #2088542