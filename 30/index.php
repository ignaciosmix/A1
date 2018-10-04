<?php
$primos = array();
$es_primo = false;
for ($i = 2; $i<100; $i++) {
    //comprobamos si es primo 
    $es_primo = true; 
     for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $es_primo = false;
                                  break;
                                }
                   }
    if ($es_primo) {
        
        //incrementa el array añadiendo numeros al final del mismo
               array_push($primos,$i);
                  }
    if (count($primos)==100) {
               break;
                  }
}
//array sum nos sumara el array
echo array_sum($primos)."<br>";
?>

