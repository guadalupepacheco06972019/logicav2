<?php
//digita un numero del 1 al 7 para obtener un dia de la semana 
//autor:lolito
$xsexo = $_POST['cbonumero'];
if($xsexo == 1 ){
	echo "el sexo del cliente es femenino";
}elseif($xsexo == 2 ){
	echo "el sexo del cñiente es masculino";
}else{
	echo "por favor seleccione uno de los valores en la opcion sexo";
}
echo "<br><a href='sexo.html'>realizar otro calculo</a>";


?>