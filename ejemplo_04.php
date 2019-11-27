<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 - Ejemplo 4</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En este programa se muestra cómo se pueden usar bibliotecas de
         * funciones creadas por el usuario, solo hace falta recopilar
         * las funciones en un archivo .php y luego incluirlo o requerirlo
         * dentro del archivo donde se van a requerir las funciones
         */
        
        /* La función require_once() permite llamar el archivo en este caso
         * puesto que está dentro de la misma carpeta se hace de la siguiente 
         * manera
         */
        require_once './ejemplo_4_Biblioteca.php';
        
        /* Vamos a inicializar un arreglo que contiene los datos de un listado
         * de personas
         */
        $listadoAmigos = array(
            array(
                "nombre" => "Juan Perez",
                "direccion" => "Clle. 3 # 25 - 40",
                "telefono" => "2345674",
                "fechaNacimiento" => "12/03/2000",
                "colorFavorito" => "Azul"
            ),
            array(
                "nombre" => "Lola Fuentes",
                "direccion" => "Cra. 4 # 12 - 18",
                "telefono" => "2345674",
                "fechaNacimiento" => "07/12/1980",
                "colorFavorito" => "Verde"
            ),
            array(
                "nombre" => "Pablo Reyes",
                "direccion" => "Cra. 16 # 125 - 15",
                "telefono" => "3456271",
                "fechaNacimiento" => "03/07/1987",
                "colorFavorito" => "Amarillo"
            ),
        );
        
        /* Lo que se requiere es mostrar todos los datos del arreglo
         * ordenados en una tabla pero que además el color favorito se busque
         * en un arreglo que contenga el color  su significado y que en 
         * una columna de la tabla se ponga el significado del color
         * la siguiente función hace todo eso, pero no está dentro de este
         * mismo archivo sino en el archivo ejemplo_4_Biblioteca.php
         * que fue requerido al inicio
         */
        muestraListadoTabla($listadoAmigos);
        ?>
    </body>
</html>