<?php

    $a = 20;
    $b = 25;

echo "Los numeros antes de cambiarlos "
    . "son: "."Variable a = $a "."| Variable b = $b"."<br>";

//Para cambiar los numeros usamos una tercera variable para poder almacenar el valor ahi
$temp = $a;
$a = $b;
$b = $temp;
 
echo "Los numeros despues de cambiarlos son: "
."Variable a = $a " . "| Variable b = $b";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

