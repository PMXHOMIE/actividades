<?php

// $i = 1;

        // Esto es un bucle osea que el programa se ejecutara hasta que 
        // la condicion marcada en el parentesis se cumpla 
// while ($i <= 10) {
//     echo "hola mundo $i <br>";
   
        //    con esto se incrementa en 1 el valor de la variable $i
//     $i++;

// }      


// echo "aqui termina agosto infinito";


// do {
    // Con el DO WHILE primero ejecuta el codigo 
    // y despues revisa si la sentencia se cumplio 
    // al no cumplirse vuelve a iniciar
//     echo "hola mundo $i <br>";
//     $i++;
// }while ($i < 10);

// echo "aqui termina agosto infinito";


// Esto es para sacar un exponencial
// se definen las variables
$base = 2;
$exp = 5;

$resultado = 1;
$i = 1;

// mientras la variable i sea menor o igual a la variable 
// exponente ejecuta el codigo
while($i <= $exp){

    // asigamos el valor de la variable un 
    // nuevo valor 
    // ese valor es la multiplicacion de la variable 
    // resultado por la variable exp
    $resultado = $resultado * $base;

    // como la variable $i inicia en 1 
    // el programa se encarga sumar 1 a $i 
    // en cada vuelta hasta que consigue el valor de
    // menor o igual a la viriable Exponente la cual es 5
    $i++;
   
}
    // como la variable $i ya vale 5 se ejecuta y se imprime el nuevo 
    // valor de la variable resultado de multiplicar 5 veces 2
echo "El valor  de $base elevado a la $exp  es: $resultado";