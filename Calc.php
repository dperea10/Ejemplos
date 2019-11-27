<?php

$Numero1 = $_GET['Numero1'];
$Numero2 = $_GET['Numero2'];
$Operador = $_GET['Operador'];

switch ($Operador) {
  case '+':
    $Resultado = $Numero1 + $Numero2;
    break;
  case '-':
    $Resultado = $Numero1 - $Numero2;
    break;
 case '/':
    $Resultado = $Numero1 / $Numero2;
    break;
case '*':
    $Resultado = $Numero1 * $Numero2;
    break;
default:
    $Resultado= "Error";
    break;
}

?>

<h1>El resultado es: <?php echo $Resultado;  ?></h1>
<a href="index.php">Regresar a la Calculadora</a>
