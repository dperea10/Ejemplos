<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 - Ejemplo 1</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>

        <?php
        /* En este programa se presenta el funcionamiento de una función
         * simple, creada por el usuario
         */
        /* Intencionalmente se escribió primero el llamado a la función antes que 
         * su definición con el fin de demostrar que no importa donde se haga
         * el llamado de una función, si antes o después de si declaración
         */
        imprimeTabla();
        /* La función imprimeTabla() genera una tabla HTML de 3 filas por 4 
         * columnas con una fila de encabezado que contiene los títulos de
         * las columnas, la función no recibe argumentos ni devuelve valores
         */
        imprimeTabla();
        function imprimeTabla() {
        ?>
            <table border ="1">
                <thead>
                    <td>Nombre</td>
                    <td>Direcci&oacute;n</td>
                    <td>Tel&eacute;fono</td>
                    <td>Fecha de Nacimiento</td>
                </thead>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                    <td>&emsp;</td>
                </tr>
            </table>
        <?php
        }
        ?>
        
    </body>
</html>