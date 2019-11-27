<?php

$nombre="Diego";
$apellido= "Palacio";
$cedula="5284108";

echo "$nombre "; 
echo "$apellido ";
echo "$cedula<br>";

//cifrado md5 

$contrasena='dapv0102';
$contrasenaEncriptada=md5($contrasena);

echo "Contraseña: ".$contrasena;
echo "<br> Encriptada: ".$contrasenaEncriptada;


//Cifrado sha1

$contrasena='dapv0102';
$contrasenaEncriptada=sha1($contrasena);

echo "<br>Contraseña: ".$contrasena;
echo "<br> Encriptada:".$contrasenaEncriptada;


//longitud


$saludo='Buenos días estimados estudiantes. Hoy vamos aprender PHP';


 echo strlen("<br>".$saludo ."<br>");
 echo "<br>".$saludo;

 //mayuscula

 $NOM="diego armando perea vielma";
 $NOM= strtoupper($NOM);

 echo ($NOM);

 //minúscula

 $noMBR="DIEGO ARMANdO pereA Vielma";
 $noMBR= strtolower($noMBR);

 echo ($noMBR);




?>