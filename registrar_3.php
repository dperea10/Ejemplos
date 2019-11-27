<?php

$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Correo = $_POST['Correo'];
$NContrasena = $_POST['Contrasena'];
$DiaNacimineto = $_POST['DiaNacimiento'];
$MesNacimineto = $_POST['MesNacimiento'];
$AnoNacimineto = $_POST['AnoNacimiento'];
$Sexo = $_POST['Sexo'];

echo "Felicitaciones " .$Nombres." ".$Apellidos." Ya te has registrado a facebook. <br>";
echo "Tu correo y contraseña son: <br>";
echo "Correo: " .$Correo . "<br>";
echo "Contraseña: ".$NContrasena."<br>";

if ($Sexo == "Mujer") {
  echo "Bienvenida <br>";
}else if ($Sexo == "Hombre") {
  echo "Bienvenido <br>";
}else{
  echo "Bienvenid@";
}

echo $DiaNacimineto. "-" . $MesNacimineto . "-" . $AnoNacimineto;


 ?>
