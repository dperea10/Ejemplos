<?php

//Funcion que realiza los numero aleatorios
  $numeroAleatorio=mt_rand(1,100);
// Condicional para trabajar con el algoritmo de buscar el numero mayor a 50

  if ($numeroAleatorio <=50)
  {
    echo "El numero $numeroAleatorio es menor a 50";
  }

else {
  echo "El numero $numeroAleatorio es mayor a 50";
}
?>
