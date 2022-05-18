<?php

class Automovil{
    //private $ruedas; encapsularia la variable y solo seria accesible desde la propia clase y no desde otro lugar
    //la varibale privada puede ser accedida desde fuera de la clase con el metodo GET
    //POR EJEMPLO
    //function get_ruedas(){
        //return $this->ruedas;
    //}
    //protected $ruedas; encapsularia la variable, pero es accesible desde la propia clase y desde sus clases heredadas.
    var $color;
    var $ruedas;

    function Automovil(){ //metodo constructor
        $this -> ruedas= 4;
        $this -> color=""; 
    }
    function acelerar(){
        echo "Estoy acelerando";
    }
    function establecer_color($color_auto, $nombre_auto){
        $this->color=$color_auto;
        echo "el color de " . $nombre_auto . " es:" . $this->color;
    }
}
$audi= new Automovil(); //estado inicial del objeto o instancias, se da mediante la llamada del constructor

$audi -> acelerar();//llamada del metodo para que ejecute la funcion acelerar

$audi->establecer_color("rojo","Audi");
echo "tiene " . $audi->ruedas . "cantidad de ruedas <br>";

//-----------------HERENCIA--------------------------------------//

class Camion extends Automovil{
    function Camion(){
        $this->ruedas=8;
        $this->color="Gris";
    }
    function establecer_color($color_camion, $nombre_camion)
    {
     $this->color= $color_camion;
     
     echo "El color de " . $nombre_camion . "es" . $this->color . "<br>";
    }
    function acelerar2()
    {
        parent::acelerar();
        echo "camion acelerando";
    }
}

$volkswagen= new Camion();
$volkswagen->acelerar2();
$volkswagen->establecer_color($this->color, "volkswagen");


?>