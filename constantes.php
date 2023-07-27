<?php


    /*
        Las constantes son tipos de datos que no cambian en la aplicación.    
    */

    define('CURSO', 'PHP 8 desde cero');
    define('USUARIO_1', 'Aldo Roddrigo Hérnandez López');
    define ('ANIMALES', [
        'perro',
        'gato',
        'toro',
        'tortuga'
    ]);

    echo CURSO;
    echo '<br>';
    echo USUARIO_1;
    echo '<br>';
    echo ANIMALES[0];
    echo '<br>';

    if(defined('CURSO'))
        echo "TRUE";
    else
        echo "FALSE";

    echo '<br>';
    echo 'Mi versión de PHP es : ' . PHP_VERSION;
    echo '<br>';
    echo 'Mi Sistema Operativo es : ' . PHP_OS;
    echo '<br>';
    echo 'Mi Ruta es : ' . PHP_EXTENSION_DIR;
    echo '<br>';
    echo 'Mi API SERVER es : ' . PHP_SAPI;  
    echo '<br>';
    echo 'Linea de execución : ' . __LINE__;
    echo '<br>';
    echo 'File : ' . __FILE__;
    