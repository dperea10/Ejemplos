<? /* Diego Armando Perea Vielma.
    ** Desarrollo Web con PHP
    ** Evidencia: Taller “Uso de arreglos".
   */
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
	<meta charset="UTF-8">
</head>
 
<body>
 
<?php
    //Se arma el arreglo para crear la tabla
$arreglo=array(
    array(
        "Diego Perea",
        "Medellin",
        "123456",
        "10/03/1989",
        "Anaranjado",
        "El Mejor"),
    array(
        "Ana Nunez",
        "Maracaibo",
        "2345667",
        "13/12/1991",
        "Verde",
        "No se encontro significado"),
    array(
        "Arnando Vielma ",
        "Santa Marta",
        "3456789",
        "10/10/1988",
        "Negro",
        "Interesante"),
    array(
        "Arnando Vielma ",
        "Santa Marta",
        "3456789",
        "10/10/1988",
        "Verde",
        "No se encontro significado"),
    
);
$colores=array();
 
// obtenemos los colores
foreach ($arreglo as $array){
    if($array[5])
    {
        $colores[$array[4]]=$array[5];
    }
}
 
// rellenamos los colores que no poseen significado significado
for($i=0;$i<count($arreglo);$i++){
    if($arreglo[$i][5]=="No se encontro significado" && array_key_exists($arreglo[$i][4], $colores))
    {
        $arreglo[$i][5]=$colores[$arreglo[$i][4]];
    }
}
?>
 
<table border="2" align="center">
    <thead>
        <tr>
            <?php
              $array = array("Nombre ","Dirección ","Teléfono ","Fecha de cumpleaños ","Color favorito ","Significado");
                foreach ($array as $valor) {
                  echo '<th>'.$valor.'</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        // obtenemos los colores
        foreach ($arreglo as $array){
            echo "<tr>";
                foreach($array as $contenido)
                {
                    echo "<td>".$contenido."</td>";
                }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
 
</body>
</html>