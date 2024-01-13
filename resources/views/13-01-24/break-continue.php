<?php

for ($i = 1; $i <= 20 ; $i++){

    if ($i == 11) {
        break;
    }
    // BREAK NO TERMINA EL PROBRAMA 
    // solo se encarga de terminar el bucle
    echo $i . "<br>";
}


for ($i = 1; $i <= 20 ; $i++){
       
    
    if ($i == 7) {
            continue;
        }
        echo $i . "<br>";
//   CONTINIUE LOGRA QUE SE DETENGA EL BUCLE 
//   EN LA OPCION DESEADA 
//   BASICAMENTE SALTA ESA PARTE Y CONTINUA CON EL 
//   BUCLE DE MANERA NORMAL
}

for ($i = 1; $i <= 20 ; $i++){
       
    
    if ($i == 7) {
            exit;
        }
        echo $i . "<br>";
//   EXIT O DIE SI SE CHINGAN AL PROGRAMA JAJA
}