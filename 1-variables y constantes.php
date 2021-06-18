<?php 
print "<h1>VARIABLES:</h1>";

/* para comenzar con una variable debemos de poner 
el signo $ */

$nombre = "MAURO"; /*siempre que este entre comillas va a ser un texto*/
$numero = 1; /*para escribir un numero lo ponemos sin comillas*/

echo "$nombre <br> <br> <br>";
echo "$numero <br> <br> <br>";
echo $numero.$nombre; /*para concatenar uso punto*/



print "<br> <br> <br> <h1>CONSTANTES:</h1> <br> <br> <br>";

$curso = 'php';
/*creo una variable y le asigno un valo*/

echo $curso;
/*llamo a la variable y la imprimo en pantalla*/

$curso = 'javascrip';
/*redefino una variable*/

echo $curso;
/*llamo a la variable la imprimo, pero al tener la misma variable
con dos nombres distintos, me imprime en pantalla las dos*/

/* para que esto no pase, lo que debemos hacer es usar una constante*/

/*usamos en define*/

define('curso','php'); /*dentro del define creamos la variable
y le asignamos el valor, no se necesita el signo $*/
$curso = html;
echo $curso;









?> 