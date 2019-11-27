<?php

function seeResultado($numero){
if($numero < 5){
$numero++;
}
else{
$numero--;
}

return $numero;
}

echo seeResultado(7);



?>
