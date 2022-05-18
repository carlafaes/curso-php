<?php
//arrays asociativos

$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";

echo $semana[1] . "<br>";//imprime en pantalla "martes"

for($i=0; $i < count($semana); $i++){
    echo $semana[$i] . "<br>";
}
//agrega un elemento al final del array
$semana[]="viernes";

$datos=array(
    "Nombre"=>"Juan",
    "Apellido"=>"Perez",
    "Edad"=>"24"
);

//Agregar un elemento mas
$datos["Pais"]="España";

echo $datos["Apellido"] . "<br>";//imprime Perez

if(is_array($datos)){//devuelve true si es un array,false si no lo es
    echo "Es un array <br>";
}
else{
    echo "no es un array <br>";
}

//ordenar array
sort($semana);

//recorrer este tipo de array
foreach($datos as $clave=>$valor){
    echo "a $clave le corresponde $valor <br>";
}

//arrays indexados
$semana2=array(1,2,3,4,5,6);
echo $semana2[1];//imprime 2

//arrays multidimensionales
$alimentos=array(
    "citricos"=>array
    ( 
        "naranjas",
        "kiwi",
        "toronka"
    ),
    "vegetales"=>array
    (
        "calabaza",
        "lechuga"
    ),
    "lacteos",
    "cereales",
);

//acceder al array
echo  $alimentos["citricos"]["kiwi"];

//recorrer el array
// foreach($alimentos as $clave => $alimento){
//     echo "$clave : <br>";

//     // while(list($clave,$valor) = each($alimento)){
//     //     echo "$clave = $valor <br>";
//     // }

// }

$data=[
    [
        "nombre"=>"Marcos Perez",
        "edad"=>24,
        "direccion"=>[
            "pais"=>"Argentina",
            "provincia"=>"Neuquen"
        ]
    ],
    [
        "nombre"=>"Marisol Gomez",
        "edad"=>26,
    ],
    [
        "nombre"=>"Natalia Perez",
        "edad"=>28,
    ]
    ];

    echo $data[0]["nombre"];//imprime "MArcos Perez
    echo $data[0]["direccion"]["pais"];//imprime Argentina

    foreach($data as $item){
        echo $item["nombre"] . "<br>";
        echo $item["edad"] . "<br>";
    }//recorre el array e imprime los nombres y edad de cada item del array



?>