<!-- Se crean 3 arreglos para almacenar la info que luego será mostrada en un select -->
<?php
$Paises = array("Colombia","Venezuela","Ecuador","Argentina","Mexico","Otro");
$Edades = array("Menor de 18","18 a 25","25 a 35","35 a 45","Mayor a 45");
$Diplomados = array("Programación web con PHP","Programación Java","Base de Datos con MYSQL","Diseño Digital","Marketing");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diplomado</title>
  </head>
  <body>
    <!-- Se inicia el formalario con toda la informaciónque se va a solicitar de la persona -->
    <h1>Registro de Inscripción</h1>

    <form class="" action="informacionInscripcion.php" method="POST">
      Número de Documento <br>
      <input type="number" name="Documento" required="" placeholder="Documento"><br><br>
      Confirmar Número de Documento <br>
      <input type="number" name="ConfirmarDocumento" required="" placeholder="ConfirmarDocumento"><br><br>
      Nombres <br>
      <input type="text" name="Nombres" required="" placeholder="Nombres"><br><br>
      Apellidos <br>
      <input type="text" name="Apellidos" required="" placeholder="Apellidos"><br><br>
      Correo <br>
      <input type="email" name="Correo" required="" placeholder="Correo"><br><br>
      Confirmar Correo <br>
      <input type="email" name="ConfirmarCorreo" required="" placeholder="ConfirmarCorreo"><br><br>
      País <br>
      <select name="Pais" required="">
        <!-- El foreach es para mostrar los datos del arreglo creado en esta misma hoja de texto -->
        <option >País</option>
        <?php
        foreach ($Paises as $Pais) {
        ?>
        <option value="<?php echo $Pais; ?>"> <?php echo $Pais; ?></option>
        <?php
        }
        ?>
        </select><br><br>
        Departamento <br>
        <input type="text" name="Departamento" required="" placeholder="Departamento"><br><br>
        Ciudad <br>
        <input type="text" name="Ciudad" required="" placeholder="Ciudad"><br><br>
       <select  name="Edad" required="">
         <option>Edad</option>
         <?php
         foreach ($Edades as $Edad) {
         ?>
         <option value="<?php echo $Edad; ?>"><?php echo $Edad; ?></option>
         <?php
         }
        ?>
      </select><br><br>
      Dirección <br>
      <input type="text" name="Direccion" required="" placeholder="Direccion"><br><br>
      Teléfono <br>
      <input type="text" name="Telefono" required="" placeholder="Telefono"><br><br>
      <select  name="Diplomado" required="">
        <option>Diplomado</option>
        <?php
        foreach ($Diplomados as $Diplomado) {
        ?>
        <option value="<?php echo $Diplomado; ?>"><?php echo $Diplomado; ?></option>
        <?php
        }
       ?>
      </select><br><br>
      ¿Cómo se enteró de la institución?  <br>
      <input type="radio" name="Informacion" value="Instagram">Instagram
      <input type="radio" name="Informacion" value="Noticias">Noticias
      <input type="radio" name="Informacion" value="Correo">Correo <br><br>

      Género <br>
      <input type="radio" name="Genero" value="Mujer">Masculino
      <input type="radio" name="Genero" value="Hombre">Femenino<br><br>


      Política de tratamiento de datos <br>
      <input type="radio" name="Politica" value="Aceptar"> Acepto los términos <br><br>

      <input type="submit" value="Registrarte">

    </form>
  </body>
</html>
