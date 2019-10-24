<?php

$nombre =$_POST['txtalumno'];
$apellido =$_POST['txtapellido'];
$nota1 =$_POST['txtp1'];
$nota2 =$_POST['txtp2'];
$nota3 =$_POST['txtp3'];
$promedio = ($nota1+$nota2+$nota3)/3;

echo " nombre: ".$nombre."<br>";
echo " apellido: ".$apellido."<br>";
echo "nota1=". $nota1."<br>";
echo "nota2=". $nota2."<br>";
echo "nota3=". $nota3."<br>";
echo "promedio=". $promedio."<br>";
ECHO " Desempeño : ";
echo "<a href='evaluacion.html'>Realizar otro calculo</a>";


$notafinal =($nota1*0.3)+($nota2*0.3)+($nota3*0.4);
if ($notafinal >8){
	echo "Aprobado sobresaliente <br />";
}elseif ($notafinal >=6 AND $notafinal <=8) {
	echo "Aprobado <br />";
}elseif ($notafinal >=5.1 AND $notafinal <=5.9) {
	echo "Recuperacion <br />";
}else {
	echo "Reprobado";
}

  
?>