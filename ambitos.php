<?php
//scope de variables en php


//variables LOCALES
$nombre="juan";
 
function getName(){
    $nombre="Marcos";
}
getName();

echo $nombre;//este echo imprime "juan", ya que el ambito de la variable que esta fuera de la funcion no esta relacionada con el ambito de la variable que se encuentra dentro la funcion.
//por lo tanto ambas variables no estan relacionadas

//variables GLOBALES
$nombre2="juan";
 
function getName2(){
    global $nombre2;//la intruccion global debe encontrarse dentro de la funcion,para hacer referenfia a la variable que se encuentra fuera de la funcion
    $nombre2="el nombre es " . $nombre2;
}
getName2();

echo $nombre2;

?>