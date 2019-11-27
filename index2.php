<!DOCTYPE html>
<html>
    <head>
        <title>Evidencia 3</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
/* Diego Armando Perea Vielma.
   Desarrollo Web con PHP.
   Evidencia 3 Taller */

   //Se presenta el llamado a la funcion en biblioteca.php
        require_once './biblioteca.php';  

   //Se muestra el resultado de la operación siempre y cuando 
   //se le ingresen los valores Ejemplo: (Valor 1, Valor 2, (El operador))
   //donde  s=suma, r=resta, m=multiplicación, d=dividir
       echo operacion(1,2,"d");

        ?>
    </body>
</html>