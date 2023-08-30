<?php


    $a = 10;
    $b = 10;

    var_dump($a > $b);
    var_dump($a < $b);
    var_dump($a >= $b);
    var_dump($a <= $b);
    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a != $b);


    $a = TRUE;
    $b = FALSE;

    var_dump($a && $b);
    var_dump($a || $b);
    var_dump($a > $b && $b < $a);
    var_dump($a > $b || $b > $a);


    $a = 10;

    echo $a++;
    echo $a--;

    echo ++$a;
    echo --$a;
