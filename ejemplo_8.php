<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 8</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En este programa se declaran e inicializan diferentes tipos de
         * variables para dar un ejemplo de los diferentes tipos de datos
         * que se manejan en PHP         * 
         */
        $nombreCompleto = 'Juan Pablo Casas Casas';//tipo de dato String
        /*Como puede verse a continuación las fechas se almacenan como tipo
          de datos string*/
        $fechaIngreso = '12/07/2005'; //Tipo de dato String
        $edad = 26; //Tipo de dato entero
        $estatura = 1.68; //Tipo de dato coma flotante
        $salario = 1.4e6; //Tipo de dato coma flotante
        ?>

        <p>
            <?php
            echo "El se&ntilde;or $nombreCompleto trabaja con la empresa "
                    . "Sysdevelopment desde el d&iacute;a $fechaIngreso, "
                    . "su edad es $edad a&ntilde;os, su estatura "
                    . "es $estatura mts. y su salario es \$$salario";
            ?>
        </p>  
    </body>
</html>
