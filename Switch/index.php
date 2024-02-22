<?php
function pruebaSwitch($variable){
	switch ($variable) {
	case '1':
		echo 'Es un 1';
		break;
	
	default:
		echo 'No es un 1';
		break;
	}
}

pruebaSwitch('0');

?>