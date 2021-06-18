<?php

echo "<h1> CONDICIONALES : </h1>";

/*   
CONDICION ___________> ACCION SI 
         |
         |__________> ACCION NO 
quiere decir que si a nuestro programa lo condionamos de alguna manera
esta va a realizar algo si esto se cumple o va a hacer otra cosa si 
esto no se cumple
 */
$a = 100;
$b = 10;

if ($a < $b) {
    echo "curso php";
} 

elseif($a == $b){
    echo "es la misma mierda";
}
else {
    echo "curso de html";
}








?>