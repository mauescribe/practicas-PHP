<?php 

echo "<h1> ARRAY</h1> <br><br><br>";
/* 
que es un array? es una estructura de datos que 
contiene una lista de elementos */
/* creamos un vector y lo hacemos con el signo
de $ y en este caso debemos especificar que vamos a hacer */

/* $dias = array[] esta seria la forma dificil de crear
un array

para imprimir no uso echo, me conviene usar var_dump()
y dentro de los parentesis poner el nombre de mi variante,
tambien podria usar print_r() y dentro del parentesis
poner el nombre de mi variante */

$dias = array (
"lunes <br>",
"martes <br>",
"miercoles <br>",
"jueves <br>",
"viernes <br>",
"sabado <br>",
"domingo");
print_r ($dias);


echo "<br><br><br><br>";


echo "<h1> ARRAY ASOCIATIVO</h1> <br><br><br>"; 

$estudiantes = array(
    'nombre' => 'Mauro <br>',
    'apellido'=>'Prystupa <br>',
    'edad'=>'23');
    print_r($estudiantes)."<br>";

    echo "<br> mi nombre es :".$estudiantes['nombre']."la edad que 
    tengo es de: ".$estudiantes[ 'edad']."<br>"." me olvidaba aclararte que
    mi apellido es: ".$estudiantes['apellido'];












?>