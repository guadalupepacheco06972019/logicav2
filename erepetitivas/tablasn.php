<?php
/*
programa para calcular tablas de multiplicar
autor:Guadalupe
*/

for($x=1; $x<=10; $x++){
	echo "<p>tabla del " .$x. "<br />";
	for($y=1; $y<=10; $y++){
		echo $x . " x " . $y . " = " . $x*$y . "<br />";
	} //fin de los multiplicares 
	echo "============= <br />";

}//fin de los multiplicandos}

echo "<p><a href='tablasn.html'>realizar otro calculo</p>";
