<?php
/*
programa para calcular tablas de multiplicar
autor:Guadalupe
*/

for($x=1; $x<=10; $x++){
	echo "<p>tabla del " .$x. "<br />";
	for($y=1; $y<=5; $y++){
		echo $x . " x " . $y . " = " . $x*$y . "&nbsp;&nbsp;&nbsp;";
	} //fin de los multiplicares 
}

echo "<p><a href='tablas5.html'>realizar otro calculo</p>";
