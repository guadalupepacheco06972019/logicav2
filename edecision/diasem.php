<?php
//digita un numero del 1 al 7 para obtener un dia de la semana 
//autor:lolito
$xdianumero = $_POST['dianumero'];

echo "<p>el numero digitado fue: " . $xdianumero . "<br>";
if($xnumero1 == 1){
	echo "correspondea lunes";
}elseif($xnumero2 == 2){
	echo "correspondea martes";
}elseif($xnumero3 == 3){
	echo "correspondea miercoles";
}elseif($xnumero4 == 4){
	echo "correspondea jueves";
}elseif($xnumero5 == 5){
	echo "correspondea viernes";
}elseif($xnumero6 == 6){
	echo "correspondea sabado";
}elseif($xnumero7 == 7){
	echo "correspondea domingo";
}
echo "<br><a href='diasem.html'>realizar otro calculo</a>";
?>