<?php

$Documento= $_POST['Documento'];
$ConfirmarDocumento = $_POST['ConfirmarDocumento'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Correo = $_POST['Correo'];
$ConfirmarCorreo = $_POST['ConfirmarCorreo'];
$Pais = $_POST['Pais'];
$Departamento = $_POST['Departamento'];
$Ciudad = $_POST['Ciudad'];
$Edad = $_POST['Edad'];
$Direccion = $_POST['Direccion'];
$Telefono= $_POST['Telefono'];
$Diplomado = $_POST['Diplomado'];
$Informacion = $_POST['Informacion'];
$Genero = $_POST['Genero'];
$Politica = $_POST['Politica'];

$Informacion = array("Documento","ConfirmarDocumento","Nombres","Apellidos","Correo",
                     "ConfirmarCorreo","Pais","Departamento","Ciudad","Edad","Direccion",
                     "Telefono","Diplomado","Informacion","Genero","Politica");

   <table border="1">

    for($row=0; $row<=2; $row++){

    <tr>

        for($col=0; $col < 2; $col++){

          <td><?php echo $Informacion[$row][$col] ?></td>

        }

   </tr>

    }


   </table>


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
