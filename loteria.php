<?php

    class Loteria{

        //Atributos
        public $numero;
        public $intentos;
        public $resultado = false;

        //Metodos
        public function __construct($numero, $intentos){
          $this->numero=$numero;
          $this->intentos=$intentos;
        }

        public function sortear(){
          $minimo=$this->numero / 2;
          $maximo=$this->numero * 2;
          for ($i=0; $i< $this->intentos; $i++){
              $intent= rand($minimo,$maximo);
              self::intentos($intent);

          }
        }
        public function intentos($intent){
          if($intent == $this->numero){
            echo "<b>" .$intent . "==" . $this->numero . "</b><br>";
            $this->resultado =true;
          }
          else {
            echo $intent ."!=" . $this->numero ."<br>";
          }
        }

        public function __destruct(){
          if($this->resultado){
            echo "Felicidades, has ganado en" .$this->intentos ."intentos";
          }else {
            echo "Que pena, no gano en" . $this->intentos . "intentos";
          }
        }
    }

        $loteria =new Loteria(10,5);
        $loteria->sortear();


?>
