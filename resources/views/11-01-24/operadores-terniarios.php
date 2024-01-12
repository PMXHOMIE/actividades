<?php

$a = 7;
$b = 7;

if ($a > $b){
    echo "El Valor de a es mayor que el valor de b";

}elseif ($a < $b){
    echo "El valor de a es menos que el valor de b";

}else{
    echo "El valor de a es igual que el valor de b";
}

// El simbolo ? remplaza al if
// $valor = $a > $b ? 'mayor' : 'menor';

$valor = $a > $b ? 'mayor' : ($a < $b ? 'menor' : 'igual' );

echo "El valor de a es $valor que el valoiir de b";