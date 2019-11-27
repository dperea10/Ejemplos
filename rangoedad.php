<?php

$edad=40;

if ($edad >=0 AND $edad<=5)
 {
  echo "Infante";
}
elseif ($edad >=6 AND $edad<=10) {
  echo "Niño";
}
elseif ($edad >=11 AND $edad<=15) {
  echo "Pre adolecente";
}
elseif ($edad >=16 AND $edad<=18) {
  echo "Adolecente";
}
elseif ($edad >=19 AND $edad<=25) {
  echo "Pre adulto";
}
elseif ($edad >=26 AND $edad<=40) {
  echo "Adulto";
}
elseif ($edad >=41 AND $edad<=55) {
  echo "Pre Anciano";
}
elseif ($edad>=56) {
  echo "Anciano";
  // code...
}

 ?>
