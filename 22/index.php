<?php

    /* CREAREMOS EL DIRECTORIO DE FICHEROS TEMPORALES USANDO EL COMANDO tempnam
y la funcion sys_get_temp_dir que nos retornara el directorio de archivos temporales
    y si no hay ninguno creado lo generará automaticamente     */
    $archivo_temp = tempnam(sys_get_temp_dir(), 'DAW');
    echo $archivo_temp;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

