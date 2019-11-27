<?php

class Servidor
{

  private $ip;
//  private $version;
  private $usuario;
  private $password;
//  private $puerto;

public function __construct(string $ip = "1212", string $usuario= "", string $password="" /*string $puerto="3306"*/){
      $this->ip=$ip;
      //$this->version=$version;
      $this->usuario=$usuario;
      $this->password=$password;
    //  $this-->puerto=$puerto;
      echo "Servidor Iniciado. <br>";

    }

   public function ingresar(string $usuario, string $password) : void {
     if ($usuario== $this->usuario AND $password == $this->password) {
       echo "Bienvenido";
     }else{
      echo "Lo siento";
    }
  }

  public function __get($propety){
    return property_exists($this, $propety) ? $this->$propety : "No existe";
  }

  public function __set($propety, $value){
    return property_exists($this, $propety) ? $this->$propety = $value : "No existe";
  }

  public function actualizarServidor(int $versiones = 0) : int {
    return $this->version += $versiones;
  }

  public function informationServidor(string $ip) : string {
    return "IP: " . $this->ip . " - Version: " . $this->version;
  }

}

?>
