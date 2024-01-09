<?php

define('CURSO' , 'Me gustan las viejas chichoonas alv');  
define('USUARIO_1' , ' PMXHOMIE');
define('ANIME_FIGHTERS' , [
    'Blazblue',
    'Persona Arena',
    'Guilty Gear', 
    'Granblue' ,
    'Mamadas' ,
]);

echo CURSO;
echo USUARIO_1;
echo ANIME_FIGHTERS[0];


if (defined('CURSO')){
    echo "Si se ha definido";
}

echo  PHP_VERSION;
echo "<br>";
// echo PHP_OS;

echo __LINE__;
echo __FILE__;