<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="../../Controlador/Usuario/usuario_controller.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="documento">Número de Documento:</label><br>
        <input type="text" id="documento" name="documento" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
