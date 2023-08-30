<?php

$a = 5;
$b = 3;

echo "First Text" . '<br>';

if($a > $b)
    echo "Second Text" . '<br>';
else
    echo "Third Text" . '<br>';

// OR using ternary operator

echo $a > $b ? "Second Text" . '<br>' : "Third Text" . '<br>';