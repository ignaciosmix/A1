<?php
 function no_repetidos($word) {
  for ($i = 0; $i <= strlen($word); $i++) {
     //Limitamos el numero del string a 1 caracter para que solo nos muestre la primera letra 
     if (substr_count($word, substr($word, $i, 1)) == 1) {
       //Devolvemos parte de la cadena gracias a la funcion substr
         return substr($word, $i, 1);
     }
  }
}

echo no_repetidos("Green")."<br>";
echo no_repetidos("abcdea")."<br>";
?>
