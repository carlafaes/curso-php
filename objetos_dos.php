<?php
class Compra_vehiculo{
    private $precio_base;
    static $descuento=4500;

    function Compra_vehiculo($gama){
        if($gama == "urbano"){
            $this->precio_base=10000;
        }
        else if($gama == "compacto"){
            $this-> precio_base=20000;
        }
        else if($gama == "berlina"){
            $this->precio_base = 30000;
        }
    }//fin constructor

    function climatizador(){
        $this-> precio_base += 2000;
    }//fin climatizador

    function navegador_gps(){
        $this-> precio_base += 2500;
    }//fin navegador_gps

    function tapiceria_cuero($color){
        if($color == "blanco"){
            $this -> precio_base += 3000;
        }
        else if($color == "beige"){
            $this -> precio_base += 3500;
        }
        else{
            $this -> precio_base += 5000;
        }
    }//fin tapiceria_cuero
    function precio_final(){
        $valor_final= $this ->precio_base - self::$descuento; //self:: se utiliza para acceder a la variable estatica

        return $valor_final;
    }//fin precio final
}//fin clase

$compra_cliente= new Compra_vehiculo("compacto");
$compra_cliente->climatizador();
echo "el precio final es: " . $compra_cliente->precio_final() . "<br>";

$compra_segundo_cliente= new Compra_vehiculo("urbano");
$compra_segundo_cliente ->tapiceria_cuero("beige");
$compra_segundo_cliente ->navegador_gps();
echo "El precio final segundo cliente: " . $compra_segundo_cliente->precio_final();
?>