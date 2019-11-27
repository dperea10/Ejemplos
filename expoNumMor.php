<?php

  $Num1= 6;
  $Num2= 7;

      if ($Num1 > $Num2){
          $Expo=($Num1 ** $Num2);
           echo "El numero menor es el 2 $Num2 del $Num1 es igual a $Expo";
      }
      elseif ($Num1 < $Num2) {
          $Expo=($Num2 ** $Num1);
           echo "El numero menor es el 1 $Num1 del $Num2 es igual a $Expo";
      }

      else{
           echo "No hay exponente:";
      }

?>
