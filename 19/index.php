<?php

//al insertar PHP dentro de la url hacemos que nos devuelva la URL entera de 
// nuestro archivo PHP
    $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $full_url."<br>";

