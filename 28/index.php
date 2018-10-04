<?php

    
function fduplicados($array) {
    /*  Aqui lo que hacemos es crear un array y usando las funciones array_values
     * y array_unique nos elimina los valores duplicados.

     * 
     *      */
  $numeros = array_values(array_unique($array));
  return $numeros ;
}
$arr = array(1,1,2,2,3,4,5,5);
print_r(fduplicados($arr));
