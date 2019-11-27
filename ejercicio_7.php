<?php

//Area y perímetro de un cuadrado

$ladoCuadrado=8;

$area= $ladoCuadrado** 2;

echo "$area";

$perimetro= 4 * $ladoCuadrado;

echo "<br> $perimetro";

//Area de un Trianguo

$baseTriangulo=9;
$alturaTriangulo=8;
$ladoUnoTriangulo=8;
$ladoDosTriangulo=8;

$areaTriangulo=($baseTriangulo * $alturaTriangulo)/2;
echo "<br>Area del triangulo: " .$areaTriangulo;

$perimetroTriangulo= $baseTriangulo+$ladoUnoTriangulo+$ladoDosTriangulo;

echo "<br> $perimetroTriangulo";



?>