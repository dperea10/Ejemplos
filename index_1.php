<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diplomado</title>
  </head>
  <body>
      <?php
       $Informacion = array(array("Diego",22,"dperea@outsotec.com"),
                                   array("Ana",25,"anay@gmail.com"),
                                   array("Niki",30,"niki@gmail.com"),
                                   array("Carlos",26,"carlos@hotmail.com"));
       ?>
   <table border="1">
     <tr>
       <th>Nombre</th>
       <th>Edad</th>
       <th>Correo</th>
    </tr>
    <?php
    for($row=0; $row<=3; $row++){
    ?>
    <tr>
    <?php
        for($col=0; $col < 3; $col++){
          ?>
          <td><?php echo $Informacion[$row][$col] ?></td>
          <?php
        }
     ?>
   </tr>
   <?php
    }
    ?>

   </table>

  </body>
</html>
