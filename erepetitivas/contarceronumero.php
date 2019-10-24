<?php
/*
programa para calcular una serie de numeros hasta un limite
autor:Guadalupe
*/

$xnumero = $_POST['txtnumero'];

echo "el numero digitado fue: " .$xnumero. "<br />";

//ñomite inferior, hasta limite superior, aumentar en 1
for($x=0; $x<=$xnumero; $x++) {
	echo $x ."<br />";

}

echo "<p><a href='contarceronumero.html'>realizar otro calculo</p>";

?>