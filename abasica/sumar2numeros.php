<?php

//programa para calcular la suma de do numeros

$numero1 = $_POST['txtnumero1'];
$numero2 = $_POST['txtnumero2'];

//realizar la suma de las variables $numero1 + $numero2

echo "<h3>Programa para sumar dos numeros</h3><br>";
echo "<h1>El primer numero digitado es: " . $numero1 . "<br>" ;
echo "<h1>El segundo numero digitado es: " . $numero2 . "<br>" ;
echo "<h1>El resultado de la suma es: " . ($numero1+$numero2) . "</h1><br>";
echo "<a href='suma2n.html'>Realizar otro calculo</a>";
?>