<?php

//programa para calcular la resta de dos numeros

$numero1 = $_POST['txtnumero1'];
$numero2 = $_POST['txtnumero2'];

//realizar la resta de las variables $numero1 + $numero2

echo "<h3>Programa para resta dos numeros</h3><br>";
echo "<h1>El primer numero digitado es: " . $numero1 . "<br>" ;
echo "<h1>El segundo numero digitado es: " . $numero2 . "<br>" ;
echo "<h1>El resultado de la resta es: " . ($numero1-$numero2) . "</h1><br>";
echo "<a href='resta2n.html'>Realizar otro calculo</a>";
?>