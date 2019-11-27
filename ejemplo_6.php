<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 6</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Nombres: </h3>
        <?php
           /* Este programa se usará para tratar el tema de variables
            * se van a declarar e inicializar variables con diferentes tipos
            * de datos y su valor será impreso en el navegador
            */
        
            /* Aunque las dos variables siguientes tienen la misma palabra como
             * nombre, son totalmente diferentes pues la primera empieza con N
             * y la segunda con n, lo que demuestra que PHP es sensible a las 
             * mayúsculas y minúsculas, ambas variables son inicializadas con
             * datos tipo String lo cual hace que el tipo que tomas es String
             */
            $Nombre = 'Luis'; 
            $nombre = 'Pablo';
            echo "$Nombre $nombre <br />";
        ?>
        <h3>Apellidos:</h3>
        <?php
            $apellidosUsuario_1 = 'Perez Jiménez'; //Otra variable con tipo String
            echo "$apellidosUsuario_1 <br />"; 
        ?>
        <h3>Edad:</h3>
        <?php
            $edad = 26; //Variable con tipo de dato Integer           
            echo "$edad <br />";           
        ?>
        <h3>Estatura:</h3>
        <?php
            $estatura = 1.78; //Variable con tipo de dato Float          
            echo "$estatura <br />";           
        ?>
        <h3>Tel&eacute;fono:</h3>
        <?php
            $telefono = '+57 (1) 323 12 00';
            echo "$telefono <br />"; #            
        ?>  
        <h3>Direcci&oacute;n:</h3>
        <?php
            /* La siguiente variable va a ser declarada pero no inicializada
             * el intérprete la tomará como tipo de dato NULL y este será
             * el valor que va a contener, dependiendo de cómo esté configurado
             * el intérprete puede mostrar un error de tipo E_NOTICE
             */
            $direccion;//Variable declarada pero no inicializada toma el tipo NULL
            echo "$direccion";         
        ?> 
    </body>
</html>