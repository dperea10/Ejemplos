<?php
function operacion($num1,$num2,$operador='s'){
    switch ($operador) {
        case 's':
            $valor = $num1 + $num2;
            break;
        case 'r':
            $valor = $num1 - $num2;
            break;
        case 'm':
            $valor = $num1 * $num2;
            break;
        case 'd':
            $valor = $num1 / $num2;
            break;
    }
    return $valor;
}
 
//echo operacion(2,3,'m');

?>