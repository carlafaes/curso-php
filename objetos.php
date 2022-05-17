<?php

class Automovil{
    var $ruedas;
    var $color;

    function Automovil(){ //metodo constructor
        $this -> ruedas= 4;
        $this -> color=""; 
    }
    function acelerar(){
        echo "Estoy acelerando";
    }
    function establecer_color($color_auto){
        $this->color=$color_auto;
        echo "el color de este automovil es:" . $this->color;
    }
}
$audi= new Automovil(); //estado inicial del objeto o instancias, se da mediante la llamada del constructor

$audi -> acelerar();//llamada del metodo para que ejecute la funcion acelerar

$audi->establecer_color("rojo");
echo "tiene " . $audi->ruedas . "cantidad de ruedas <br>";
?>