<?php

//Declarar strict types en nuestros ficheros PHP, forzará a que nuestros métodos acepten variables únicamente del tipo exacto que se declaren. En caso contrario lanzará un TypeError.
declare(strict_types=1);

function sumarEnteros(int $entero1, int $entero2): int | float{ //espècifica que espera recibir datos de tipo entero como asi tambien datos de tipo flotante
    return $entero1 + $entero2;
}

$resultado= sumarEnteros(2, 7);
echo $resultado;
?>