<?php


$valores= array();
$numeroMax=rand(0,50);

for ($i=0; $i < 10; $i++) {
  $numeroMax=rand(0,50);
  array_push($valores, $numeroMax);
}
for ($i=0; $i < count($valores) ; $i++) {
  echo $valores[$i]."<br>";

}

echo "El numero mayor del array es : " . max($valores)."<br>";
echo "El numero mayor del array es : " . min($valores);

?>
