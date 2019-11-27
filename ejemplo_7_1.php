<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 7_1</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Ejemplo del uso de una variable predefinida ($_SERVER): </h3>
        <p>
            <b>Software del servidor: </b>
            <?php
            /* En este segmento se muestra el ejemplo del uso de una variable 
             * predefinida 
             */
            echo $_SERVER['SERVER_SOFTWARE'];
            ?>
        </p>     
    </body>
</html>