<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 - Ejemplo 5</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <p>
        <h3>Ejemplo de la funci&oacute;n date()</h3>
        <?php
        /* En este programa se muestra el uso de algunas funciones
         * de la biblioteca de PHP
         */
        /* La función date() devuelve la fecha y hora del sistema
         *  requiere un parámetro de tipo cadena que indica la forma en la 
         * que se debe mostrar la información devuelta
         */
        echo date('D, d M Y H:i:s');
        ?>
    </p>
    <p>
    <h3>Ejemplo de la funci&oacute;n print_r()</h3>
    <?php
    /* Se inicializa un arreglo para poder utilizar algunas funciones
     * que nos permiten procesarlos
     */
    $arregloAnimales = array(
        "Perro",
        "Gato",
        "Liebre",
        "Conejo",
        "Vaca",
        "Lobo",
        "Abeja",
        "Oveja",
        "Pollo"
    );
    /* La función print_r() muestra en el navegador todo el 
     * contenido del arreglo
     */
    print_r($arregloAnimales);
    ?>
</p>
<p>
<h3>Ejemplo de la funci&oacute;n asort()</h3>
<?php
/* La función asort() ordena el arreglo que se pasa como parámetro
 * pero no usa la instrucción return, ya que recibe el arreglo como
 * parámetro por referencia, es decir, que el arreglo ordenado
 * queda almacenado en el mismo arreglo que se envió, por esa razón si
 * volvemos a imprimir el mismo arreglo se muestra ahora ordenado,
 * pero podremos notar que la función solo reordena las posiciones
 * de los elementos en el arreglo sin modificar los índices
 */
asort($arregloAnimales);
print_r($arregloAnimales);
?>
</p>
<p>
<h3>Ejemplo de la funci&oacute;n isset()</h3>
<?php
/* La función isset() evalúa si una variable ya ha sido
 * inicializada y devuelve un valor lógico, es supremamente
 * útil para evitar errores lógicos
 */
$a = "Si estoy inicializada";
if (isset($a)) {
    echo "La variable \$a si está inicializada <br />";
}
if (!isset($b)) {
    echo "La variable \$b no esta inicializada";
}
?>
</p>
</body>
</html>