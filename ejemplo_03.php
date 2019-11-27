<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 - Ejemplo 3</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En este programa se presenta el funcionamiento de una función
         * que devuelve datos luego de su ejecución
         */
        /* encuentraValorArreglo() es una función que recibe un arreglo
         * y un valor para buscar el valor dentro del arreglo enviado
         * Esta función ya esta programada en la biblioteca de PHP pero
         * la codificamos aqui a modo de ejemplo de una función que retorna 
         * valores, al función retorna TRUE si encuentra el valor en el arreglo
         * y FALSE si no lo encuentra 
         */
        function encuentraValorArreglo($arreglo, $valorBuscado) {
            foreach ($arreglo as $valor) {
                if ($valor == $valorBuscado) {
                    return TRUE;
                }
            }
            return FALSE;
        }
        // Se declara un arreglo con datos para poder buscar en el
        $arregloAnimales = array(
            "Perro",
            "Gato",
            "Liebre",
            "Conejo",
            "Vaca",
            "Lobo",
            "Abeja",
            "Oveja",
            "Pollo",
            "Leon"
        );
        //Se declaran dos variables con datos a ser buscados en el arreglo
        $animalQueEsta = "Vaca";
        $animalQueNoEsta = "Leon";
        /* Se usa el valor retornado por la variable como expresión para
         * un condicional en este caso el valor a buscar si está dentro del 
         * arreglo por lo tanto la función retornará TRUE lo que hará que
         * la condición se cumpla
         */
        if (encuentraValorArreglo($arregloAnimales, $animalQueEsta)) {
            echo "$animalQueEsta si se encuentra en el arreglo <br />";
        }
        /* En este caso el valor a buscar no estará en el arreglo, por ello
         * debe utilizarse una negación pues la función retornará FALSE
         * que al ser negado se convierte en TRUE y hace que la condición
         * se cumpla
         */
        if (!encuentraValorArreglo($arregloAnimales, $animalQueNoEsta)) {
            echo "$animalQueNoEsta no se encuentra en el arreglo";
        }
        ?>
    </body>
</html>