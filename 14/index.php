<?php
    $file = basename($_SERVER['PHP_SELF']); 
    //Comprobamos las filas del archivo y contamos cuantas lineas hay
    $num_lineas = count(file($file)); 
    //Mostramos lineas contadas
    echo "There are $num_lineas lines in $file";
?>