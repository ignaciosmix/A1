<?php

//comprobamos si la pagina es https (si no lo es será http entonces.)

if (!empty($_SERVER['HTTPS'])) 
{
  echo 'Esta página es https';
}
else
{
echo 'Esta página es http ';
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

