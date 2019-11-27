<?php

   $movimiento = array ("R", "V", "L"); /*variable en donde marca la letra de
    * R de reservado, V de vendido y L de libre */

   $_POST ["A1"] = $movimiento[2]; /*intento que el primero puesto de sala de teatro aparezca la
    * letra con el movimiento realizado, así igual se debe hacer en los demás puesto */

   if ($_POST ["opciones"] == "Reservar") {
      echo $_POST ["A1"] = $movimiento[0];
   }
      elseif ($_POST ["opciones"] == "Comprar") {
       echo $_POST ["A1"] = $movimiento[1];
       }
      elseif ($_POST ["opciones"] == "Liberar") {
       echo $_POST ["A1"] = $movimiento[2];
       }
   else {
      echo ($_POST ["A1"] = "L");
   }

   ?>
