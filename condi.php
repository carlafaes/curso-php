<?php
$a=5;
$b=3;

//condicionales ternarios anidados
$valor= $a > $b ? "mayor" : ($a < $b ? "menor" : "igual");
echo $valor;

$ac= 3;

if($ac == 1){
    echo "Lunes";
}
else if($ac == 2){
    echo "martes";
}
else if($ac == 3){
    echo "miercoles";
} 

//estructura algoritimica de seleccion multiple (switch)

switch($ac){
    case "1":
        echo "lunes";
        break;
    case "2":
        echo "martes";
        break;
    case "3":
        echo "miercoles";
        break;
    case "4":
        echo "jueves";
        break;
    default:
    echo "el valor de la variable no es valido";
     break;
}

//match
echo match($ac){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves", 
    default => "El valor de la variable no es valido"
};
?>