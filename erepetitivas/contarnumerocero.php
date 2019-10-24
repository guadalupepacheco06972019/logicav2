<?php
/*
programa para calcular una serie de numeros hasta un limite
autor:Guadalupe
*/

$xnumero = $_POST['txtnumero'];
$suma = 0;
echo "el numero digitado fue: " .$xnumero. "<br />";

//limite inferior, hasta limite superior, disminuir hasta 0
for($x=$xnumero; $x>=0; $x--) {
	echo $x ."<br />";
	$suma = $suma + $x;
}

echo "<p>la suma de la serie de numero es: " .$suma. "<br />";
echo "<p><a href='contarnumerocero.html'>realizar otro calculo</p>";

?>