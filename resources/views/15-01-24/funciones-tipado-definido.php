<?php



declare(strict_types=1);

// Si especificasel tipo de valor que requieres php intentara tranformarlo
// aqui pasamos un flotante a un entero
function sumarEnternos(int $entero1, int $entero2): int | float
{

    return $entero1 + $entero2;
}
    $resultado = sumarEnternos (2, 5);

    echo $resultado;


    // especificar tipos de date_offset_get
    // int = Entero
    // float = Flotante o decimal
    // string = Texto
    // bool = True false 
    // array = Grupo de objetos
    // object = objeto pue 
    // null = Valor Nulo NO  NO False Nulo es un valor hueco