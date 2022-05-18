<?php

$i= 1;

//primero verifica que la condicion se cumpla y despues se ejecuta el codigo
while($i <= 10){
    echo "valor de variable es " . $i . "<br>";
    $i++;
}

//primero ejecuta el codigo y despues verifica la condicion del while
do{
 echo "el valor de la variable es " . $i . "<br>";
 $i++;
}while($i < 10);


$base= 2;
$exp= 5;
$valor =  $base * $exp;
echo $valor;

$resultado =1;
$k=1;

while($k <= $exp){ 
    $resultado *= $base;
    $k++;
}

echo "el valor de $base elevado a el exponente $exp es: " . $resultado;

?>