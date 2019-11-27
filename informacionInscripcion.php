<!-- Los datos enviados del index.php son recibidos acá -->
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
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diplomado</title>
  </head>
  <body>
    <h1>Información de Inscripción</h1>
    <!-- Se crea un arreglo para almacenar los datos y luego mostrarlo en la tabla -->
    <?php
    $Informacion = array($_POST['Documento'],$_POST['ConfirmarDocumento'],$_POST['Nombres'],$_POST['Apellidos'],
                         $_POST['Correo'],$_POST['ConfirmarCorreo'],$_POST['Pais'],$_POST['Departamento'],
                          $_POST['Ciudad'],$_POST['Edad'],$_POST['Direccion'],$_POST['Telefono'],$_POST['Diplomado'],
                          $_POST['Informacion'],$_POST['Genero']
                         );
     ?>
<!-- Se realiza la tabla para mostrar la información -->
    <table border="1">

     <tr>
       <td><?php echo "Documento" ?></td>
       <td><?php echo $Informacion[0] ?></td>
     <tr>
       <td> <?php echo "Confirmar Documento" ?></td>
       <td><?php echo $Informacion[1] ?></td>
     </tr>
    <tr>
      <td> <?php echo "Nombres" ?></td>
      <td><?php echo $Informacion[2] ?></td>
    <tr>
      <td><?php echo "Apellidos" ?></td>
      <td><?php echo $Informacion[3] ?></td>
    </tr>
    <tr>
      <td><?php echo "Correo" ?></td>
      <td><?php echo $Informacion[4] ?></td>
    <tr>
       <td> <?php echo "Confirmar Correo" ?></td>
       <td><?php echo $Informacion[5] ?></td>
    </tr>
    <tr>
      <td> <?php echo "País" ?> </td>
      <td><?php echo $Informacion[6] ?></td>
    <tr>
      <td> <?php echo "Departamento" ?></td>
      <td><?php echo $Informacion[7] ?></td>
    </tr>
    <tr>
      <td> <?php echo "Ciudad" ?></td>
      <td><?php echo $Informacion[8] ?></td>
    <tr>
      <td> <?php echo "Edad" ?></td>
      <td><?php echo $Informacion[9] ?></td>
    </tr>
    <tr>
      <td> <?php echo "Dirección" ?></td>
      <td><?php echo $Informacion[10] ?></td>
    <tr>
      <td> <?php echo "Teléfono" ?></td>
      <td><?php echo $Informacion[11] ?></td>
    </tr>
    <tr>
      <td> <?php echo "Diplomado" ?></td>
      <td><?php echo $Informacion[12] ?></td>
    <tr>
      <td> <?php echo "Información" ?></td>
      <td><?php echo $Informacion[13] ?></td>
    </tr>
    <tr>
      <td> <?php echo "Información" ?></td>
      <td><?php echo $Informacion[14] ?></td>
    </tr>

  </table>

</body>
</html>
