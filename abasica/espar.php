<?php


$numero1 = $_POST['txtnumero1'];

echo "<h3>programa para deternimar si es par<h3><br>";
echo "<h1>el numero digitado si:" . $numero1 . "</h1><br>";
if($numero1 % 2 == 0){
	echo "<h1> ek numero digitado es par </h1><br>";
}
 else{
 	echo "<h1>el numero digitado NO es par </h1><br>";
 }

 echo "<a href='espar.html'>realizar otro calculo</a>";
?>
