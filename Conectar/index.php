<?php
include_once "conectar.php";

// Ejemplo de uso
$db = new MySQLDB('localhost', 'root', 'root', 'proyecto');

// Ejecutar una consulta
$resultado = $db->query("SELECT * FROM persona");

// Iterar sobre los resultados (ejemplo)
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombrePersona'] . "<br>";
    echo $fila['apellidoPersona'] . "<br>";
    echo $fila['documentoPersona'] . "<br>";
}

// Cerrar la conexión cuando hayas terminado
$db->close();
