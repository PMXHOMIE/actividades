<?php

// $array = [1 ,2, 3];

// $a = $array[0];
// $a = $array[1];
// $a = $array[2];


// list($a, $b, $c) = $array;

// echo $b;


// esta funcion llena los numero 
// de tal a tal
$array = range(10, 20);

// var_dump($array);

// Esta funcion se encarga de 
// contar los valores de un array
echo count($array);

$array2 = ['jomi', 'dople', 'slayer', 'viento'];

// esta funcion se encarga de 
// eliminar determinado elemento en 
// el array
unset($array2[0]);


// Esta funcion se encarga de 
// buscar determinado elemento 
// en un array
if (in_array('jomi',$array2)){
    echo "el homie esta en la casa";
}else{
    echo "aqui no ta";
}