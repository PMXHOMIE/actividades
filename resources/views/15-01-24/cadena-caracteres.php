<?php


$cadena = "aeiou Hola mundo me duele bien cabron la cabeza";

echo $cadena[0];

// Esta funcion cheka la cantidad 
// de bits de la cadena
echo strlen($cadena);

// Esta funcion muestra la cantidad
// de caractereres de la cadena
echo mb_strlen($cadena);

// Esta Funcion recorrela cadena y 
// te marca el indice en donde se encuentra
// el caracter que le pediste buscar (De derecha a izquierda)
echo strpos($cadena, 'i');

// Esta Funcion recorrela cadena y 
// te marca el indice en donde se encuentra
// el caracter que le pediste buscar (De izquierda a derecha)
echo strrpos($cadena, 'i');

// Se encarga de buscar una cadena 
// dentro de otra cadena de caracteres
echo str_contains($cadena, 'mundo') ? 'Si encontre mundo en esta cadena ptm' : 'no hay joven';

// Con esta funcion encontramos si 
// la cadena inicia con el valor buscado 
// igual funciona como boleano 
// diciendo si si inicia o no
echo str_starts_with($cadena, 'mundo') ? 'Si encontre mundo en esta cadena ptm' : 'no hay joven';

// Con esta funcion encontramos si 
// la cadena TERMINA con el valor buscado 
// igual funciona como boleano 
// diciendo si si inicia o no
echo str_ends_witch($cadena, 'mundo') ? 'Si encontre mundo en esta cadena ptm' : 'no hay joven';
?>

<?php

$cadena1 = "prueba";
$cadena2 = "prueba";


// Esta funcion se encarga de comparar
// 2 cadenas y verificar si son iguales
if(strcmp($cadena1, $cadena2) == 0 ){

    echo "Las 2 cadenas son iguales";
}else{
    echo "Las Cadenas son disTINTAS";
}


// Esta funcion se encarga de comparar
// 2 cadenas y verificar si son iguales
// añadiendo minusculas y mayusculas
if(strcasemp($cadena1, $cadena2) == 0 ){

    echo "Las 2 cadenas son iguales";
}else{
    echo "Las Cadenas son disTINTAS";
}




?>

<?php

// Esta funcion se  encarga de tomar partes 
// especificas de la cadena 
// dependiendo de el valor que le indiques
// Puede traer una letra o partes dela Cadena misma
$cadena3 = "Hola Mundo";
echo substr($cadena3, 1);

// remplada un valor de la cadena por 
// lo que tu quieras
echo str_replace("mundo", "mamadas" , $cadena3);


// Cambia  la cadena a minusculas
echo strtolower($cadena3);

// CAMBIA LA CADENA A MAYUSCULAS
echo strtoupper($cadena3);

// Cambia la primera Letra de la cadena 
// a MAYUSCULA
echo ucfirst($cadena3);

// La primer letra decada palabra de 
// la cadena sera MAYUSCULA
echo ucwords($cadena3);

