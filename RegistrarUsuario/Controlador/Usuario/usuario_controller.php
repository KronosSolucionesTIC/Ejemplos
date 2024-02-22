<?php
include_once "../../Modelo/DB/conectar.php";

// Verifica si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $documento = $_POST["documento"];
    $password = $_POST["password"];

    // Ejemplo de uso
    $db = new MySQLDB('localhost', 'root', 'root', 'proyecto');

    // Prepara la consulta para insertar los datos
    $sql = "INSERT INTO usuario (
        nombre_usuario,
        apellido_usuario,
        documento_usuario,
        password_usuario)
        VALUES ('$nombre', '$apellido', '$documento', '$password')";

    // Ejecuta la consulta
    if ($db->query($sql)) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el usuario: " . $conexion->error;
    }

    // Cerrar la conexión cuando hayas terminado
    $db->close();
}

