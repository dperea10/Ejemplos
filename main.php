<?php

require_once('servidor.php');

$servidorLocal =new Servidor("192.168.10.23","root","root");

$servidorLocal->ingresar("root","root");
//$servidorLocal->actualizarServidor(2);
$servidorLocal->informationServidor("192.168.10.22");



?>
