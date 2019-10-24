<?php
//evalua el mayor de 3 numeros, los casos pueden ser:
//uno de los numeros es mayor 
//ambos son iguales
//autor:lolito
$xnumero1 = $_POST['numero1'];
$xnumero2 = $_POST['numero2'];
$xnumero2 = $_POST['numero3'];

echo "<p>los numeros digitados fueron: <br>";
echo "primero numero: " . $xnumero1 . " . el segundo numero es: " . $xnumero2 . " . el tercer numero es: " . $xnumero3 . "</p>";
echo "<a href='mayor3n.html'>realizar otro calculo</a>";

if($xnumero1 > $xnumero2 > $xnumero3){
	echo "<h1>El numero" . $xnumero1. " es el mayor";
}elseif ($xnumero1 < $xnumero2){
	echo "<h1>El numero" . $xnumero2. " es el mayor";
}elseif ($xnumero2 < $xnumero3){
	echo "<h1>El numero" . $xnumero3. " es el mayor";
}else{	
	echo "<h1> $xnumero1 y $xnumero2 son iguales";
	echo "<h1> $xnumero2 y $xnumero3 son iguales";
}

?>