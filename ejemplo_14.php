<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 14</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Ciclo for</h3>
        <p>
            <?php
            /* En este programa se muestra cómo se pueden los ciclos
             * for y foreach
             */
            for ($i = 1; $i <= 7; $i++) { //Se ponen todas las condiciones del ciclo
                echo "$i <br />"; //Se ejecuta una rutina
            }
            ?>
        </p> 
        <h3>Ciclo foreach</h3>
        <p>
            <?php
            /* Puesto que el ciclo foreach fue creado para recorrer arreglos
             * lo primero que se requiere es tener un arreglo con información
             */
            $arregloAnimales = array(
                "Perro",
                "Gato",
                "Conejo",
                "Liebre",
                "Tortuga"
            );
            foreach ($arregloAnimales as $animal) {
                echo "$animal <br />";
            }
            ?>
        </p>
    </body>
</html>