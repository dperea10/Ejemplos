<!DOCTYPE html>
<html>
<head>
    <title> TITULO</title>
</head>
<body>
    <h1 align="center">ARREGLOS</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>Codigo</td>
        <td>Identificacion</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Especialidad</td>
        <td>Telefono</td>
        <td>Correo</td>
    </tr>
    <?php 
        
        $arregloAnimales = array(
                "Perro",
                "Gato",
                "Conejo",
                "Liebre",
                "Tortuga"
            );
       
        <tr>
       
        foreach ($arregloAnimales as $animal) {
    ?>
            
                <td><?php echo "$animal";?></td>
                <td><?php echo "$animal";?></td>
                <td><?php echo "$animal"?></td>
                <td><?php echo "$animal";?></td>
                <td><?php echo "$animal";?></td>
                <td><?php echo "$animal";?></td>
                <td><?php echo "$animal";?></td>
            </tr> 
        }

     
    </table>

</body>
</html>