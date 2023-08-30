<?php

    echo 'Mark of time '. time() . '<br>';
    echo 'squart of 9 is ' . sqrt(9) . '<br>';
    echo 'rand between 90 and 100 is ' . rand(90,100) . '<br><br>';



    function factorial($num_factorial){
        $res = 1;

        for($i = 1; $i <= $num_factorial; $i++)
            $res *= $i;


        echo $res . '<br>';
    }

    factorial(9);
    factorial(8);
    factorial(7);
    factorial(6);
    factorial(5);
    factorial(4);
    factorial(3);
    factorial(2);
    factorial(1);
    factorial(0);

    
    