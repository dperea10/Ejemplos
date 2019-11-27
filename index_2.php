<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diplomado</title>
  </head>
  <body>
    <h1>Calculadora</h1>
    <form class="" action="Calc.php" method="GET">
      Numero 1 <br>
      <input type="number" name="Numero1" required=""><br><br>
      Operador <br>
      <select name="Operador" required="">
        <option disabled="">Seleccione</option>
        <option value="+"> + </option>
        <option value="-"> - </option>
        <option value="/"> / </option>
        <option value="*"> * </option>

      </select><br><br>
      Numero 2 <br>
      <input type="number" name="Numero2" required=""><br><br>
      <input type="submit" value="Calular">
    </form>
  </body>
</html>
