<?php
function fconvertir($word) {
    //explode nos dividira un string en varios string
    $dividir = explode(';',$word);
    $result = '';
    /*por cada palabra dividida por ; nos mirara si cada letra que hemos escrito
    coincide con el case que le corresponde, si coincide nos devuelve el numero convertido a digito*/
    foreach($dividir as $value){
        
        switch(trim($value)){
            //trim lo que hara es que nos eliminara los ; para que nos salga el numero junto al otro
            case 'cero':
                $result .= '0';
                break;
            case 'uno':
                $result .= '1';
                break;
            case 'dos':
                $result .= '2';
                break;
            case 'tres':
                $result .= '3';
                break;
            case 'cuatro':
                $result .= '4';
                break;
            case 'cinco':
                $result .= '5';
                break;
            case 'seis':
                $result .= '6';
                break;
            case 'siete':
                $result .= '7';
                break;
            case 'ocho':
                $result .= '8';
                break;
            case 'nueve':
                $result .= '9';
                break;    
        }
    }
    return $result;
}

echo fconvertir("cero;tres;cinco;seis;ocho;uno")."<br>";

?>
