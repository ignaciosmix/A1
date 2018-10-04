<?php

//con current file name cojemos el nombre del fichero

//con file last modified vemos la ultima modificacion del archivo en formato de fecha
    $current_file_name = basename($_SERVER['PHP_SELF']);
    $file_last_modified = filemtime($current_file_name); 
    echo "Ultima vez modificado " . date("l, dS F, Y, h:ia", $file_last_modified)."<br>";


