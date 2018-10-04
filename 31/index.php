<?php
function validar_email($email)
{
  $result = trim($email);
  /* con la funcion filter_var y el parametro de FILTER_VALIDATE_EMAIL comprobamos
  // si el email es valido o no*/
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    return "El email es valido";
  } 
  else 
  {
    echo "El email no es valido";
  }
}
echo validar_email("prueba@gmail.com")."<br>";
echo validar_email("pruebagmail.com")."<br>";
?>
