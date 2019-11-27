<html>
    <head>
        <meta charset="UTF-8">
        <title>Evidencia 4 - Taller</title> <!-- Título de la evidencia  -->
    </head>
    <body>
            <form method="post" action="datos.php"> <!-- Se empieza a crear el formulario  -->

                <h1 align = center>TEATRO LA GRAN OBRA</h1>
                <p align = center>
                    <label>ESCENARIO<label>


                <p align = center>  <!-- Se crea los títulos de las columnas  -->
                    &nbsp &nbsp <!- Agrega dos espacios en blanco para alinear las posiciones de los puestos -->
                    <input type="text" name="1" value = "1" readonly size = 1 style= "text-align:center">
                    <input type="text" name="2" value = "2" readonly size = 1 style= "text-align:center">
                    <input type="text" name="3" value = "3" readonly size = 1 style= "text-align:center">
                    <input type="text" name="4" value = "4" readonly size = 1 style= "text-align:center">
                    <input type="text" name="5" value = "5" readonly size = 1 style= "text-align:center">
                </p>


                <!-- Se crean todos los puestos, tipo texto  -->
                <p align = center>
                    <label>A</label>
                    <input type="text" name="A1" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="A2" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="A3" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="A4" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="A5" value ="L" size = 1 maxlength=1 style= "text-align:center">
                </p>

                <p align = center>
                    <label>B</label>
                    <input type="text" name="B1" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="B2" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="B3" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="B4" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="B5" value ="L" size = 1 maxlength=1 style= "text-align:center">
                </p>

                <p align = center>
                    <label>C</label>
                    <input type="text" name="C1" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="C2" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="C3" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="C4" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="C5" value ="L" size = 1 maxlength=1 style= "text-align:center">
                </p>
                <p align = center>
                    <label>D</label>
                    <input type="text" name="D1" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="D2" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="D3" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="D4" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="D5" value ="L" size = 1 maxlength=1 style= "text-align:center">
                </p>
                <p align = center>
                    <label>E</label>
                    <input type="text" name="E1" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="E2" value ="L"size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="E3" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="E4" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="E5" value ="L" size = 1 maxlength=1 style= "text-align:center">
                </p>

                <p align = center>
                    <label>F</label>
                    <input type="text" name="F1" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="F2" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="F3" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="F4" value ="L" size = 1 maxlength=1 style= "text-align:center">
                    <input type="text" name="F5" value ="L" size = 1 maxlength=1 style= "text-align:center">
                </p>

                <!-- Se elaboran oos input tipo radio para seleccionar la operación que se quiere realizar,
                Reservar, Comprar o Liberar   -->
                <p align = center>
                    <label>
                     &nbsp &nbsp Fila
                        <select name="fila">
                        <option value ="A">A</option>
                        <option value ="B">B</option>
                        <option value ="C">C</option>
                        <option value ="D">D</option>
                        <option value ="E">E</option>
                        <option value ="F">F</option>
                        </select>
                     </label>
                </p>

                <p align = center>
                    <label>
                     Puesto
                        <select name="puesto">
                        <option value ="1">1</option>
                        <option value ="2">2</option>
                        <option value ="3">3</option>
                        <option value ="4">4</option>
                        <option value ="5">5</option>
                        </select>
                    </label>
                </p>

                <p align = center>
                    <label> Transacción: </label>
                        <label>
                        <label> Reservar
                        <input type="radio" name="opciones"
                        value="Reservar">

                        </label>
                        <label> Comprar
                         <input type="radio" name="opciones"
                                   value= "Comprar">

                        </label>
                        <label> Liberar
                            <input type="radio" name="opciones"
                                   value="Liberar">

                        </label>
                    </p>
                    <br>

                    <P align =" center">
                    <input type="submit" value="Aceptar"> <!-- Aceptar la operación a realizar  -->
                    <input type="reset" value="Cancelar"> <!-- Cancelar la operación a realizar -->
    </body>
</html>
