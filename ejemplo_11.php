<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 11</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Ejemplo de asignaci&oacute;n de variables por valor:</h3>
        <p>
            <?php
            /* En este programa se muestra como al asignar el contenido de
             * una variable a otra por valor las modificaciones de una
             * variable no afectan a la otra
             */
            $edad = 6;
            $edadFutura = $edad; //Se asigna el valor de $edad a $edadFutura
            $edadFutura += 4; //Se modifica el valor de $edadFutura
            echo "En este momento Pablo tiene $edad a&ntilde;os, cuando pasen"
            . " 4 a&ntilde;os Pablo tendr&aacute; $edadFutura a&ntilde;os";
            ?>
        </p> 
        <h3>Ejemplo de asignaci&oacute;n de variables por referencia:</h3>
        <p>
            <?php
            /* En este caso se muestra como al asignar el contenido de
             * una variable a otra por referencia las modificaciones de una
             * variable si afectan a la otra
             */
            $edad = 6;
            $edadFutura = &$edad; //Se asigna la REFERENCIA a $edad en $edadFutura
            echo "- En este momento Pablo tiene $edad a&ntilde;os <br /> ";
            /* A continuación se le va a asignar a $edadFutura el valor de lo
             * que esta contenga más 4, pero como en $edadFutura no hay un valor
             * sino una referencia lo que va a pasar entonces es que el valor
             * de $edad se va a modificar sumándole 4
             */
            $edadFutura += 4; 
            /* Como puede verse en la siguiente línea no se utiliza la
             * variable $edadFutura sino que se usa $edad y aunque esta
             * no se ha modificado directamente sino por referencia el nuevo
             * valor será el que contenía antes + 4
             */
            echo "- Cuando pasen 4 a&ntilde;os Pablo tendr&aacute; $edad a&ntilde;os";
            ?>
        </p> 
    </body>
</html>