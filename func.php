<?php

//Declarar strict types en nuestros ficheros PHP, forzará a que nuestros métodos acepten variables únicamente del tipo exacto que se declaren. En caso contrario lanzará un TypeError.
declare(strict_types=1);

function sumarEnteros(int $entero1, int $entero2){
    return $entero1 + $entero2;
}

$resultado= sumarEnteros(2, 7);
echo $resultado;
?>