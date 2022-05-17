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

?>