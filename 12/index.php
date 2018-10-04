<?php

//Con foreach automatizamos que nos muestre linea por linea del codigo fuente de  de la pagina web
    $all_lines = file('https://www.youtube.com/');
    foreach ($all_lines as $line_num => $line)
 {
 	//Nos mostrará linea por linea el codigo hasta que no hayan mas e incluso mostrará un numero de linea.
        echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
 }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

