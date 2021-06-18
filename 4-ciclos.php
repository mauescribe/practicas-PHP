<?php

echo "<h1>CICLOS: WHILE- DO WHILE- FOR</h1>";
echo "<br><br><br> <h1>WHILE</h1>";
$numero = 1; 

while ($numero <= 10) {
    echo $numero;
    $numero++;
    echo "<br>";
}
echo "<br>terminaste gil";
/* una vez que determinamos la variable, abrimos el while ($a <= 10) {
    # code...} este nos va a pedir que dento del parentesis fijemos la condicion,
y dentro de los chorquetes que hacer mientras se cumpla esa condicion. */

echo "<br><br><br> <h1> DO WHILE</h1>";
echo "<br><br>";
$numero = 1;
do {
    echo $numero;
    $numero++;
    echo "<br>";
} while ($numero <= 12);
echo "el do while es la misma mierda que el while";


echo "<br><br><br> <h1> FOR</h1>";
echo "<br><br>";

/* el for es el siclo que mas vamos a usar hay un punto de inicio
hay una secuencia con elementos, si los elementos cumplen con
secuencia, pasan a eecutar declarciones, sigue la secuencia las
veces que sea permitodo--------
en la primer variable ponemos el punto de inicio,
en la segunda variable la condicion
y en la tercera la condicional*/

$numero = 1;
for ($numero=0; $numero <= 10 ; $numero++) { 
    echo $numero;
    echo "<br>";
}
echo "parece mas dificil 
pero no se si lo es o no lo entendi bien"


?>