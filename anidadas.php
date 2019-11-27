<?php
//
$dolar =3240;

if ($dolar>=0)
  {
  if ($dolar > 0 AND $dolar <= 1000)
  {
    echo " El dolar tiene un valor bajo";
  }
  elseif ($dolar >1000 AND $dolar <=2000)
  {
    // code...
  echo "El dolar tiene un valor bajo";
  }
  elseif ($dolar >2000 AND $dolar <=3000)
  {
    // code...
    echo "El dolar tiene un valor alto";
  }
  elseif ($dolar >3000)
  {
    echo "El dolar tiene un valor muy alto";
  }

}
else {
  echo "El dolar no puede ser un valor negativo";

}


 ?>
