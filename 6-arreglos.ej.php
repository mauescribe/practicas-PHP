<?php

$semana[0] = '<br>Lunes <br>';
$semana[1] = 'Martes<br>';
$semana[2] = 'Miercoles<br>';
$semana[3] = 'Jueves<br>';
$semana[4] = 'Viernes<br>';
$semana[5] = 'Sabado<br>';
$semana[6] = 'Domingo<br>';

echo 'cantidad de dias que tiene la semana '
    . count($semana);

for ($i = 0; $i < count($semana); $i++) {
    echo $semana[$i];
};
/* 
necesitamos dos tipos de variables, una que es la 
que se encarga de contar los tipos de elementos
y la otra donde se va a aplicar ese conteo

la variable i es para contar e inicia en 0 */

/* tenemos otra forma de hacerlo y es mediante un if
en el cual le deremos que recorra todos los elementos
y si escuentra el elento me muestre una leyenda */

$semana[0] = 'Lunes ';
$semana[1] = 'Martes';
$semana[2] = 'Miercoles';
$semana[3] = 'Jueves';
$semana[4] = 'Viernes';
$semana[5] = 'Sabado';
$semana[6] = 'Domingo';

for ($i = 0; $i < count($semana); $i++) {
    if ($semana[$i] == 'Jueves') {
        echo 'encontre el jueves';
    };
};


echo '<h1>    EJERCICIO </h1>';


$amigos = array(
    'jose', 'pedro', 'juan', 'mauro',
    'matias', 'enzo'
);

$posicion = count($amigos) - 2;

echo $amigos[$posicion];
$amigos[6] = 'marcos';

$posicion = count($amigos) - 1;
echo '<br>';
echo $amigos[$posicion];
echo '<br>';
echo count($amigos);
echo '<br>';
for ($posicion = 0; $posicion
    < count($amigos); $posicion++) {
    if ($amigos[$posicion] == 'marcos'); {
        echo 'encontre a tu amigo';
    };
};
echo '<br><br><br>';
print_r($amigos);

echo '<br><br><br>';

asort($amigos);
print_r($amigos);


echo '<br><br><br>';

rsort($amigos);
print_r($amigos);

echo '<br><br><br>';
?>