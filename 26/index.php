<?php

function numero_amstrong($num1) {
  $length= strlen($num1);
  $num1 = (string)$num1;
  $sum = 0;
  for ($i = 0; $i < $length; $i++) {
      //calculamos el valor elevado a sus potencias para ver si es numero Amstrong
    $sum = $sum + pow((string)$num1{$i},$length);
    
  }
  //si el numero es un numero amstrong la variable $sum sera igual a $num1
  if ((string)$sum == (string)$num1) {
      //si la variable $sum es igual a $num sera un numero Amstrong
    return "Este numero es un numero Amstrong";
  } 
    //sino no sera un numero Amstrong
  else {
    return "Este numero no es un numero Amstrong";
  }
}
echo "Es 153 un numero Armstrong ? ".numero_amstrong(153)."<br>";
echo "Es 55 un numero Armstrong ? ".numero_amstrong(55)."<br>";
echo "Es 4587 un numero Armstrong ? ".numero_amstrong(4587)."<br>";
echo "Es 8208  un numero Armstrong ? ".numero_amstrong(8208)."<br>";
