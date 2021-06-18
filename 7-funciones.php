<?php

/* array_chunk es dividir el array principal en partes 
segun nos convenga */
echo '<h1> ARRAY_CHUNK </h1>';

/* array_chunk es dividir el array principal en partes 
segun nos convenga */
echo '<br><br>';
$amigos = array(
    'mauro<br>',
    'pedro<br>',
    'juan<br>',
    'rodolfo<br>',
    'mario<br>',
    'carlos<br>'
);
$funcion = array_chunk($amigos, 3);
print_r($funcion);

echo '<h1> ARRAY_SLICE </h1>';
echo '<br><br>';

/* lo que hago con este array es que elimino los elementos
que no voy a usar   */
$amigos = array(
    'mauro<br>',
    'pedro<br>',
    'juan<br>',
    'rodolfo<br>',
    'mario<br>',
    'carlos<br>'
);
$funcion = array_slice($amigos, 1);


print_r($funcion);

echo '<br><br>';
echo '<h1> ARRAY_merge </h1>';
echo '<br><br>';

/* con este array lo que hago es unir dos array en uno
los combino. */
$amigos = array(
    'mauro<br>',
    'pedro<br>',
    'juan<br>',
    'rodolfo<br>',
    'mario<br>',
    'carlos<br>'
);
$compas = array(
    'sanchez<br>', 'mora<br>',
    'suarez<br>',
);

$union = array_merge($amigos, $compas);

print_r($union);


echo '<br><br>';
echo '<h1> ARRAY_POP </h1>';
echo '<br><br>';

/* con esta funcion lo que logro es eliminar un elemento
de la lista. */
$amigos = array(
    'mauro<br>',
    'pedro<br>',
    'juan<br>',
    'rodolfo<br>',
    'mario<br>',
    'carlos<br>'
);

$amigos = array_pop($amigos);
print_r($amigos);
echo '<br><br>';
/* si lo hago de esta manera lo unico que logro es que
    me muestre el ultimo valor, si quiero ver mi array
    con el elemento eliminado debo sacar la variable. */
$amigos = array(
    'mauro<br>',
    'pedro<br>',
    'juan<br>',
    'rodolfo<br>',
    'mario<br>',
    'carlos<br>'
);

array_pop($amigos);
print_r($amigos);

echo '<br><br>';
echo '<h1> ARRAY_SEARCH </h1>';
echo '<br><br>';

/* para buscar elementos dentro de un array, utilizo 
funcion array_search. */
$amigos = array(
    'mauro',
    'pedro',
    'juan',
    'rodolfo',
    'mario',
    'carlos'
);

$buscar = array_search('rodolfo', $amigos);
print_r($buscar);



echo '<br><br>';
echo '<h1> ARRAY_REVERSE </h1>';
echo '<br><br>';

/* para dar vuelta el orden de un array usamos el
array_reverse. */
$amigos = array(
    'mauro',
    'pedro',
    'juan',
    'rodolfo',
    'mario',
    'carlos'
);

$reverse = array_reverse($amigos);
print_r($reverse);

array_