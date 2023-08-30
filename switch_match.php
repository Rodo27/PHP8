<?php

$a = 4;

// if($a == 1)
//     echo 'Lunes';
// else if ($a == 2)
//     echo 'Martes';
// else if ($a == 3)
//     echo 'Miercoles';
// else if ($a == 4)
//     echo 'Jueves';
// else if ($a == 5)
//     echo 'Viernes';
// else if ($a == 6)
//     echo 'Sabado';
// else if ($a == 7)
//     echo 'Domingo';


// switch($a){
//     case 1:
//         echo 'Lunes';
//         break;

//     case 2:
//         echo 'Martes';
//         break;

//     case 3:
//         echo 'Miercoles';
//         break;

//     case 4:
//         echo 'Jueves';
//         break;

//     case 5:
//         echo 'Viernes';
//         break;

//     case 6:
//         echo 'Sabado';
//         break;

//     case 7:
//         echo 'Domingo';
//         break;

//     default:
//         echo 'No existe esta opción';
//         break;
// }

echo match($a){
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miercoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sabado',
    7 =>  'Domingo',
    default => 'No existe esta opción'
};