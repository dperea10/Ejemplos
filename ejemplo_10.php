di<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 10</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Ejemplo de expresi&oacute;n con operador aritm&eacute;tico:</h3>
        <p>
            <?php
            /* En  este programa se presenta el uso de diferentes tipos de 
             * operadores en expresiones correctamente formuladas
             */
            $nombreTrabajador = 'Jose Pablo Caro Ospina';
            //Se usa el operador de asignación = para darle valor a $salario
            $salario = 1.2e6;
            $porcentajeReteFuente = 0.011;
            //Se usa el operador aritmético * para multiplicar
            $reteFuente = $salario * $porcentajeReteFuente;
            $totalDevengado = $salario * (1 - $porcentajeReteFuente);
            echo "El trabajador $nombreTrabajador tiene un salario de: \$$salario"
            . ", se le hace un descuento por retenci&oacute;n en la fuente de:"
            . "\$$reteFuente, el salario total que devenga el trabajador"
            . "es de: \$$totalDevengado";
            ?>
        </p> 
        <h3>Ejemplo de expresi&oacute;n con operador de asignaci&oacute;n: </h3>
        <p>
            <?php
            $manzanas = 3;
            $regalo = 4;
            /* Se usa el operador de asignación += para sumar el valor de una
             * variable a otra
             */
            echo "Pablo tiene $manzanas manzanas, Mar&iacute;a le regala $regalo "
            . "manzanas, por lo tanto ahora Pablo tiene "
            . ($manzanas += $regalo) . " manzanas";
            ?>
        </p>  
        <h3>Ejemplo de expresi&oacute;n con operador de incremento: </h3>
        <p>
            <b>Usando pre-incremento: </b>
            <?php
            $edad = 21;
            // Se usa el operador de pre-incremento ++
            echo "El a&ntilde;o pasado Nancy Ten&iacute;a $edad a&ntilde;os, "
            . "puesto que este a&ntilde;o ella ya cumpli&oacute; ahora "
            . "tiene " . ++$edad . " a&ntilde;os";
            ?>
            <b>Usando post-incremento: </b>
            <?php
            $edad = 21;
            echo "El a&ntilde;o pasado Nancy Ten&iacute;a " . $edad++
            . " a&ntilde;os, puesto que este a&ntilde;o ella ya "
            . "cumpli&oacute; ahora tiene $edad a&ntilde;os";
            ?>
        </p>
    </body>
</html>