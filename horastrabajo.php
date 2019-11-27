<?php

  $horasHombre= 5;
  $horasTrabajo=8;

      if ($horasHombre < $horasTrabajo){
          $total=($horasTrabajo-$horasHombre);
           echo "Les faltan: $total horas para cumplir el horario";
      }
      elseif ($horasHombre > $horasTrabajo) {
          $total=($horasHombre-$horasTrabajo);
           echo "Tiene horas extras: $total";
      }

      else{
           echo "Trabjó las horas legales:";
      }

?>
