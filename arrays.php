<?php
//arrays asociativos

$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";
echo $semana[1];//imprime en pantalla "martes"

$datos=array(
    "Nombre"=>"Juan",
    "Apellido"=>"Perez",
    "Edad"=>"24"
);
echo $datos["Apellido"];//imprime Perez

//arrays indexados
$semana2=array(1,2,3,4,5,6);
echo $semana2[1];//imprime 2
?>