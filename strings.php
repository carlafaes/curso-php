<?php
 $variable1="Casa";
 $variable2="CASA";

 $resultado= strcmp($variable1,$variable2);

 echo "resultado1 : $resultado <br>";

 $resultado2=strcasecmp($variable1,$variable2);

 print "resultado2 " . $resultado2;

 if($resultado === 0){
     echo "los strings coinciden";
 }else{
     echo "los strings no coinciden";
 }


 //pasar parametro por valor
 function mayusChange($param){
     $param= strtolower($param);

     $param=ucwords($param);

     return $param;
 }

 $cadena= "hEllO woRld";

 echo mayusChange($cadena) . "<br>";
 echo "la cadena es $cadena <br>";


 //pasar valor por referencia
 //con el signo & creamos un vinculo entre las variables $param y $cadena2,por lo que la variable $cadena2 tambien se ve afectada por este cambio
 function mayusChangeDos(&$param){
    $param= strtolower($param);

    $param=ucwords($param);

    return $param;
}

$cadena2= "hEllO woRld";

echo mayusChangeDos($cadena2) . "<br>";
echo "la cadena es $cadena2";

?>