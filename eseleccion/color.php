<?php
//asignacionde la fila segun el color del carnet

$xcolor = $_POST['cbcolor'];

echo "el color seleccionado es: " . $xcolor . "<br />";

switch ($xcolor) {
	case 'amarillo':
	echo "su fila asignada es la numero 1";
		break;

	case 'azul':
	echo "su fila asignada es la numero 2";
		break;

	case 'verde':
	echo "su fila asignada es la numero 3";
		break;
	case 'majenta':
	echo "su fila asignada es la numero 4";
		break;

	case 'rojo':
	echo "su fila asignada es la numero 5";
		break;
	
	default:
		echo "por favor haga una seleccion valida";
		break;
}
	echo "<br /><a href='colores.html>'hacer otra seleccion</a>";
?>