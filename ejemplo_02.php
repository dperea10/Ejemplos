<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 - Ejemplo 2</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En este programa se presenta el funcionamiento de una función
         * que recibe argumentos
         */
        /* La función imprimeTabla() genera una tabla HTML de n filas donde
         * la cantidad de filas está definida por el argumento $filas
         * pero el argumento tiene un valor predefinido, así que si el 
         * usuario de la función no da un valor se generará una tabla con 3 
         * filas por 4 columnas con una fila de encabezado que contiene los títulos de
         * las columnas, la función no recibe argumentos ni devuelve valores
         */
        function imprimeTabla($filas = 8) {
            ?>
            <table border ="1">
                <thead>
                <td>Nombre</td>
                <td>Direcci&oacute;n</td>
                <td>Tel&eacute;fono</td>
                <td>Fecha de Nacimiento</td>
            </thead>
            <?php
            /* Mediante un ciclo for se pueden crear la cantidad de filas
             * que se requieran con base en el argumento $filas, como puede
             * verse esto hace el código más eficiente ya que se requieren menos
             * líneas de código que en el ejemplo anterior que hacia algo similar
             */
            for ($i = 1; $i <= $filas; $i++) {
                ?>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    /* Se llama la función sin poner argumento por lo que se tomará el valor 
     * predefinido 3 que será el número de filas de la tabla
     */
    imprimeTabla();
    /* Se llama la función poniendo como argumento 5 que sepa el número de 
     * filas de la tabla
     */
    imprimeTabla(5);
    ?>
</body>
</html>