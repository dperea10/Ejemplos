<?php
/* Esta es una biblioteca de funciones que están diseñadas para mostrar
 * los datos de un arreglo que contiene un listado de personas y ciertos datos
 * específicos, y permite buscar uno de los datos que es el color favorito
 * en un arreglo que contiene los colores y su significado mostrando en la tabla
 * el significado del color favorito de cada persona del listado
 */

/* La función encuentraSignificado() busca el color que recibe como parámetro
 * en un arreglo inicializado dentro de la misma función que contiene
 * los colores y sus significados y devuelve el significado del color recibido
 */

function encuentraSignificadoColor($colorBuscado) {
    /* Inicialización del arreglo que contiene los colores y los significados
     * respectivos de cada color
     */

    $coloresSignifcado = array(
        array(
            "color" => "Amarillo",
            "significado" => "Alegria, riqueza"
        ),
        array(
            "color" => "Verde",
            "significado" => "Esperanza"
        )
    );

    /* Se recorre el arreglo con un ciclo foreach y si se encuentra el color que
     * se recibió como parámetro se devuelve el dato del significado
     */
    foreach ($coloresSignifcado as $colorSignificado) {
        if ($colorSignificado['color'] == $colorBuscado) {
            return $colorSignificado['significado'];
        }
    }
    /* Si después de recorrer todo el arreglo no se encuentra el color recibido
     * se devuelve el mensaje "No se encuentra el significado"
     */
    return "No se encuentra el significado";
}

/* La función muestraListadoTabla() imprime una tabla HTML en la que muestra
 * todos los datos del arreglo que recibe como parámetro, esta no es una función
 * muy flexible ni reutilizable, ya que solo muestra los datos de un
 * arreglo que tenga una estructura muy específica
 */

function muestraListadoTabla($listado) {
    ?>
    <table border ="1">
        <thead>
        <td>Nombre</td>
        <td>Direcci&oacute;n</td>
        <td>Tel&eacute;fono</td>
        <td>Fecha de Nacimiento</td>
        <td>Color Favorito</td>
        <td>Significado</td>
    </thead>
    <?php
    /* Mediante un ciclo for se pueden crear la cantidad de filas
     * que se requieran con base en el argumento $filas, como puede
     * verse esto hace el código más eficiente ya que se requieren menos
     * líneas de código que en el ejemplo anterior que hacia algo similar
     */
    foreach ($listado as $registro) {
        ?>
        <tr>
            <td><?php echo $registro['nombre']; ?></td>
            <td><?php echo $registro['direccion']; ?></td>
            <td><?php echo $registro['telefono']; ?></td>
            <td><?php echo $registro['fechaNacimiento']; ?></td>
            <td><?php echo $registro['colorFavorito']; ?></td>
            <td>
                <?php
                /* En este punto se hace el llamado a la función
                 * encuentraSignificadoColor() que está en esta misma 
                 * biblioteca, y que retorna el significado del color
                 * favorito o un mensaje en caso de no encontrarlo
                 */
                echo encuentraSignificadoColor($registro['colorFavorito']);
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
}