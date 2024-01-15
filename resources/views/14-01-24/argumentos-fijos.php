<?php


function valoracion ($nombre, $rating = 5){

    echo "El $nombre  tiene una valoracion de $rating";

}

valoracion("affesto" , 10 );




function valoracion2 ($nombre, $rating = 5){

    echo "El $nombre  tiene una valoracion de $rating";

}

function concatenar(...$palabras){

    $resultado = "";

    foreach ($palabras as $palabra) {
        
        $resultado .= $palabra . "";


    }

    echo $resultado

}

concatenar('af', 'fest', '2023', 'mejor', 'torneo', 'del', 'perro', 'mundo');