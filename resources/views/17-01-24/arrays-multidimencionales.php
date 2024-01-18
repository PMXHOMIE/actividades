<?php

$data = [
[
    'nombre' => 'jomi',
    'email' => 'jomi@gmail',
    'celular'=> '123123123',
    'direccion' => [
        'pais' => 'mexico',
        'codigopostal' => '44700'
                    ]
],

[
        'nombre' => 'pmx',
        'email' => 'jomwefi@gmail',
        'celular'=> '123123123'
],

[
            'nombre' => 'HOMIE',
            'email' => 'jowefmi@gmail',
            'celular'=> '123123123'
],

[
                'nombre' => 'OLV',
                'email' => 'jomfewi@gmail',
                'celular'=> '123123123'
],
];

foreach ($data as $item) {
    echo $item ['nombre'] . "<br>";
    echo $item ['email'] . "<br>";
    echo $item ['celular'] . "<br>";

    echo "<hr>";
}