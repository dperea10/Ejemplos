<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 7</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <p><b>El valor de la compra es: $</b>
            <?php
                /* En este programa se tiene la variable $valor la cual se 
                 * utiliza en varios segmentos del mismo código pudiendo
                 * modificar su contenido debido a que su ámbito se mantiene
                 * dentro del mismo archivo en el que fue declarada
                 */
                $valor = 1000; //Declaración e inicialización de $valor
                echo "$valor";
            ?>
        </p>
        <p><b>M&aacute;s el IVA: $</b>
            <?php
                $valor = $valor * 1.16; //Modificación de $valor
                echo "$valor";
            ?>
        </p>
        <p><b>M&eacute;nos el descuento de 5%: $</b>
            <?php
                $valor = $valor * 0.95; //Modificación de $valor
                echo "$valor";
            ?>
        </p>          
    </body>
</html>